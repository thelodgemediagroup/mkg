<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// load codeigniter resources
$CI =& get_instance();


class Gcalendar {


	private $feed_start = null;
	private $feeds = array();
	private $max_events_display = 0;
	private $merged_feed_data = array();
	private $sort_order = 'asc';
	private $errors = array();
	private $title = null;
	private $start_of_week = 0;


	public function __construct()
	{
		require_once('gce-feed.php');

		$feed = new GCE_feed();
		$feed->set_feed_url( 'https://www.google.com/calendar/feeds/mkgdetroit%40gmail.com/public/basic?singleevents=true&sortorder=ascending&orderby=starttime' );
		$feed->set_max_events( 40 );

		$feed->set_feed_start( mktime( 0, 0, 0, date( 'm' ), ( date( 'j' ) - 31 ), date( 'Y' ) ) );

		$feed->set_feed_end( mktime( 0, 0, 0, date( 'm' ), ( date( 'j' ) + 31 ), date( 'Y' ) ) );

		$feed->set_time_format(' g:i a');
		$feed->set_date_format(' F j, Y');
		$feed->set_multi_day(FALSE);

		$feed->set_display_options( array(
				'display_start' => 'time',
				'display_end' => 'time-date',
				'display_location' => NULL,
				'display_desc' => NULL,
				'display_link' => 'on',
				'display_start_text' => 'Starts:',
				'display_end_text' => 'Ends:',
				'display_location_text' => 'Location:',
				'display_desc_text' => 'Description:',
				'display_desc_limit' => NULL,
				'display_link_text' => 'More details',
				'display_link_target' => NULL,
				'display_separator' => ', '			
			));

		$feed->set_use_builder(TRUE);

		$feed->set_builder(
				'<div class="gce-list-event gce-tooltip-event">[event-title]</div>
				<div><span>Starts:</span> [start-time]</div>
				<div><span>Ends:</span> [end-date] - [end-time]</div>
				[if-location]<div><span>Location:</span> [location]</div>[/if-location]
				[if-description]<div><span>Description:</span> [description]</div>[/if-description]
				<div>[link newwindow="true"]More details...[/link]</div>'
			);

		$feed->init();

		$this->feeds[0] = $feed;
		$this->merged_feed_data = array_merge( $this->merged_feed_data, $feed->get_events() );

		//Sort the items into date order
		if ( ! empty( $this->merged_feed_data ) )
			usort( $this->merged_feed_data, array( $this, 'compare' ) );		
	}

	//Comparison function for use when sorting merged feed data (with usort)
	private function compare( $event1, $event2 ) {
		//Sort ascending or descending
		if ( 'asc' == $this->sort_order )
			return $event1->get_start_time() - $event2->get_start_time();

		return $event2->get_start_time() - $event1->get_start_time();
	}


	public function get_calendar()
	{
		return $this->get_grid();
	}

	//Returns grid markup
	private function get_grid ( $year = null, $month = null, $ajaxified = false ) {
		require_once 'php-calendar.php';

		$time_now = time();

		//If year and month have not been passed as paramaters, use current month and year
		if( ! isset( $year ) )
			$year = date( 'Y', $time_now );

		if( ! isset( $month ) )
			$month = date( 'm', $time_now );

		//Get timestamps for the start and end of current month
		$current_month_start = mktime( 0, 0, 0, date( 'm', $time_now ), 1, date( 'Y', $time_now ) );
		$current_month_end = mktime( 0, 0, 0, date( 'm', $time_now ) + 1, 1, date( 'Y', $time_now ) );

		//Get timestamps for the start and end of the month to be displayed in the grid
		$display_month_start = mktime( 0, 0, 0, $month, 1, $year );
		$display_month_end = mktime( 0, 0, 0, $month + 1, 1, $year );

		//It should always be possible to navigate to the current month, even if it doesn't have any events
		//So, if the display month is before the current month, set $nav_next to true, otherwise false
		//If the display month is after the current month, set $nav_prev to true, otherwise false
		$nav_next = ( $display_month_start < $current_month_start );
		$nav_prev = ( $display_month_start >= $current_month_end );

		//Get events data
		$event_days = $this->get_event_days();

		//If event_days is empty, then there are no events in the feed(s), so set ajaxified to false (Prevents AJAX calendar from allowing to endlessly click through months with no events)
		if ( empty( $event_days ) )
			$ajaxified = false;

		$today = mktime( 0, 0, 0, date( 'm', $time_now ), date( 'd', $time_now ), date( 'Y', $time_now ) );

		$i = 1;

		foreach ( $event_days as $key => $event_day ) {
			//If event day is in the month and year specified (by $month and $year)

			if ( $key >= $display_month_start && $key < $display_month_end ) {
				//Create array of CSS classes. Add gce-has-events
				$css_classes = array( 'gce-has-events' );

				// headline for calendar
				$cal_headline = array();

				//Create markup for display
				$markup = '<div class="gce-event-info">';

				$markup .= '<ul>';

				foreach ( $event_day as $num_in_day => $event ) {
					$feed_id =  abs(intval($event->get_feed()->get_feed_id()));
					$markup .= '<li class="gce-tooltip-feed-' . $feed_id . '">' . $event->get_event_markup( 'tooltip', $num_in_day, $i ) . '</li>';

					//Add CSS class for the feed from which this event comes. If there are multiple events from the same feed on the same day, the CSS class will only be added once.
					$css_classes['feed-' . $feed_id] = 'gce-feed-' . $feed_id;
					$cal_headline[] = $event->get_calendar_headline();
					$i++;
				}

				$markup .= '</ul></div>';

				//If number of CSS classes is greater than 2 ('gce-has-events' plus one specific feed class) then there must be events from multiple feeds on this day, so add gce-multiple CSS class
				if ( count( $css_classes ) > 2 )
					$css_classes[] = 'gce-multiple';

				//If event day is today, add gce-today CSS class, otherwise add past or future class
				if ( $key == $today )
					$css_classes[] = 'gce-today gce-today-has-events';
				elseif ( $key < $today )
					$css_classes[] = 'gce-day-past';
				else
					$css_classes[] = 'gce-day-future';

				//Change array entry to array of link href, CSS classes, and markup for use in gce_generate_calendar (below)
				$event_days[$key] = array( null, implode( ' ', $css_classes ), $markup, $cal_headline );
			} elseif ( $key < $display_month_start ) {
				//This day is before the display month, so set $nav_prev to true. Remove the day from $event_days, as it's no use for displaying this month
				$nav_prev = true;
				unset( $event_days[$key] );
			} else {
				//This day is after the display month, so set $nav_next to true. Remove the day from $event_days, as it's no use for displaying this month
				$nav_next = true;
				unset( $event_days[$key] );
			}
		}

		//Ensures that gce-today CSS class is added even if there are no events for 'today'. A bit messy :(
		if ( ! isset( $event_days[$today] ) )
			$event_days[$today] = array( null, 'gce-today gce-today-no-events', null );

		$pn = array();

		//Only add previous / next functionality if AJAX grid is enabled
		if ( $ajaxified ) {
			//If there are events to display in a previous month, add previous month link
			$prev_key = ( $nav_prev ) ? '&laquo;' : '&nbsp;';
			$prev = ( $nav_prev ) ? date( 'm-Y', mktime( 0, 0, 0, $month - 1, 1, $year ) ) : null;

			//If there are events to display in a future month, add next month link
			$next_key = ( $nav_next ) ? '&raquo;' : '&nbsp;';
			$next = ( $nav_next ) ? date( 'm-Y', mktime( 0, 0, 0, $month + 1, 1, $year ) ) : null;

			//Array of previous and next link stuff for use in gce_generate_calendar (below)
			$pn = array( $prev_key => $prev, $next_key => $next );
		}

		//Generate the calendar markup and return it
		return gce_generate_calendar($year, $month, $event_days, 1, null, 0, $pn );
	}

	//Returns array of days with events, with sub-arrays of events for that day
	private function get_event_days() {
		$event_days = array();

		//Total number of events retrieved
		$count = count( $this->merged_feed_data );

		//Loop through entire array of events, or until maximum number of events to be displayed has been reached
		for ( $i = 0; $i < $count; $i++ ) {
			$event = $this->merged_feed_data[$i];

			//Check that event ends, or starts (or both) within the required date range. This prevents all-day events from before / after date range from showing up.
			if ( $event->get_end_time() > $event->get_feed()->get_feed_start() && $event->get_start_time() < $event->get_feed()->get_feed_end() ) {
				foreach ( $event->get_days() as $day ) {
					$event_days[$day][] = $event;
				}

				//If maximum events to display isn't 0 (unlimited) decrement $max counter
				if ( 0 != $this->max_events_display )
					$max--;
			}
		}

		return $event_days;
	}

	public function get_event_list( $event_class, $grouped = false ) {
		$time_now = time();

		$event_days = $this->get_event_days();

		//If event_days is empty, there are no events in the feed(s), so return a message indicating this
		if( empty( $event_days) )
			return '<p>There are currently no events to display.</p>';

		$today = mktime( 0, 0, 0, date( 'm', $time_now ), date( 'd', $time_now ), date( 'Y', $time_now ) );

		$i = 1;

		$markup = '<ul class="gce-list">';
		$markup .= '<li class="gce-class-sched">Class Schedule</li>';

		foreach ( $event_days as $key => $event_day ) {
			//If this is a grouped list, add the date title and begin the nested list for this day
			if ( $grouped ) {
				$markup .=
					'<li' . ( ( $key == $today ) ? ' class="gce-today"' : '' ) . '>' .
					'<div class="gce-list-title">' . $this->title . ' ' . date( $event_day[0]->get_feed()->get_date_format(), $key ) . '</div>' .
					'<ul>';
			}

			foreach ( $event_day as $num_in_day => $event ) {
				//Create the markup for this event
				if ($event->get_title() == $event_class)
				{
					$markup .= '<ul>';
					$markup .=
						$event->get_list_markup();
					$markup .= '</ul>';
					$i++;
				}

			}

			//If this is a grouped list, close the nested list for this day
			if ( $grouped )
				$markup .= '</ul></li>';
		}

		$markup .= '</ul>';

		if ($i == 1)
		{
			return '<br><li>There are currently no classes scheduled. Check back later</li>';
		}
		return $markup;
	}
}

?>