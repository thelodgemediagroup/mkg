<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gcalendar {


	private $feed_start = null;


	public function __construct()
	{
		//require_once('gce-event.php');
		require_once('gce-feed.php');
		//require_once('gce-parser.php');
		//require_once('php-calendar.php');

		$feed = new GCE_feed();
		$feed->set_feed_url( 'https://www.google.com/calendar/feeds/testguy736251%40gmail.com/public/basic?alt=json&singleevents=true&sortorder=ascending&orderby=starttime' );
		$feed->set_max_events( 40 );

		$feed->set_feed_start( mktime( 0, 0, 0, date( 'm' ), ( date( 'j' ) - date( 'w' ) ), date( 'Y' ) ) );

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

		//fb($feed);

	}

	public function get_calendar()
	{
		return 'This is the calendar';
	}

}

?>