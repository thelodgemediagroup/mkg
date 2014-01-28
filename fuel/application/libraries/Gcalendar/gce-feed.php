<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// load codeigniter resources
$CI =& get_instance();
$CI->load->helper('object');

class GCE_Feed{
	private $feed_id = 1;
	private $feed_title = '';
	private $feed_url = '';
	private $max_events = 25;
	private $cache_duration = 43200;
	private $date_format = '';
	private $time_format = '';
	private $timezone = '';
	private $display_opts = array();
	private $multi_day = false;
	private $feed_start = 0;
	private $feed_end = 2145916800;
	private $use_builder = true;
	private $builder = '';
	private $events = array();
	private $error = false;


	function init() {
		require_once 'gce-event.php';

		//Break the feed URL up into its parts (scheme, host, path, query)
		$url_parts = parse_url( $this->feed_url );

		$scheme_and_host = $url_parts['scheme'] . '://' . $url_parts['host'];

		//Remove the exisitng projection from the path, and replace it with '/full-noattendees'
		$path = substr( $url_parts['path'], 0, strrpos( $url_parts['path'], '/' ) ) . '/full-noattendees';

		//Add the default parameters to the querystring (retrieving JSON, not XML)
		$query = '?alt=json&singleevents=true&sortorder=ascending&orderby=starttime';

		$gmt_offset = 5 * 3600;

		//Append the feed specific parameters to the querystring
		$query .= '&start-min=' . date( 'Y-m-d\TH:i:s', $this->feed_start - $gmt_offset );
		$query .= '&start-max=' . date( 'Y-m-d\TH:i:s', $this->feed_end - $gmt_offset );
		$query .= '&max-results=' . $this->max_events;

		if ( ! empty( $this->timezone ) )
			$query .= '&ctz=' . $this->timezone;

		//If enabled, use experimental 'fields' parameter of Google Data API, so that only necessary data is retrieved. This *significantly* reduces amount of data to retrieve and process
		$query .= '&fields=entry(title,link[@rel="alternate"],content,gd:where,gd:when,gCal:uid)';

		//Put the URL back together
		$url = $scheme_and_host . $path . $query;

		//Retrieve the feed data
		$raw_data = file_get_contents($url);

		//Attempt to convert the returned JSON into an array
		$raw_data = object_to_array(json_decode($raw_data));

		//If decoding was successful
		if ( ! empty( $raw_data ) ) {
			//If there are some entries (events) to process
			if ( isset( $raw_data['feed']['entry'] ) ) {
				//Loop through each event, extracting the relevant information
				foreach ( $raw_data['feed']['entry'] as $event ) {
					$id          = substr( $event['gCal$uid']['value'], 0, strpos( $event['gCal$uid']['value'], '@' ) );
					$title       = $event['title']['$t'];
					$description = $event['content']['$t'];
					$link        = $event['link'][0]['href'];
					$location    = $event['gd$where'][0]['valueString'];
					$start_time  = $this->iso_to_ts( $event['gd$when'][0]['startTime'] );
					$end_time    = $this->iso_to_ts( $event['gd$when'][0]['endTime'] );

					//Create a GCE_Event using the above data. Add it to the array of events
					$this->events[] = new GCE_Event( $id, $title, $description, $location, $start_time, $end_time, $link );
				}
			}
		}

		//Makes sure each event knows it came from this feed
		foreach ( $this->events as $event ) {
			$event->set_feed( $this );
		}

	}

	//Convert an ISO date/time to a UNIX timestamp
	function iso_to_ts( $iso ) {
		sscanf( $iso, "%u-%u-%uT%u:%u:%uZ", $year, $month, $day, $hour, $minute, $second );
		return mktime( $hour, $minute, $second, $month, $day, $year );
	}

	//Return error message, or false if no error occurred
	function error() {
		return $this->error;
	}

	//Setters

	function set_feed_id( $v ) {
		$this->feed_id = $v;
	}

	function set_feed_title( $v ) {
		$this->feed_title = $v;
	}

	function set_feed_url( $v ) {
		$this->feed_url = $v;
	}

	function set_max_events( $v ) {
		$this->max_events = $v;
	}

	function set_cache_duration( $v ) {
		$this->cache_duration = $v;
	}

	function set_date_format( $v ) {
		$this->date_format = $v;
	}

	function set_time_format( $v ) {
		$this->time_format = $v;
	}

	function set_timezone( $v ) {
		$this->timezone = $v;
	}

	function set_display_options( $v ) {
		$this->display_opts = $v;
	}

	function set_multi_day( $v ) {
		$this->multi_day = $v;
	}

	function set_feed_start( $v ) {
		$this->feed_start = $v;
	}

	function set_feed_end( $v ) {
		$this->feed_end = $v;
	}

	function set_use_builder( $v ) {
		$this->use_builder = $v;
	}

	function set_builder( $v ) {
		$this->builder = $v;
	}

	//Getters

	function get_events() {
		return $this->events;
	}

	function get_feed_id() {
		return $this->feed_id;
	}

	function get_feed_title() {
		return $this->feed_title;
	}

	function get_feed_url() {
		return $this->feed_url;
	}

	function get_date_format() {
		return $this->date_format;
	}

	function get_time_format() {
		return $this->time_format;
	}

	function get_display_options() {
		return $this->display_opts;
	}

	function get_multi_day() {
		return $this->multi_day;
	}

	function get_feed_start() {
		return $this->feed_start;
	}

	function get_feed_end() {
		return $this->feed_end;
	}

	function get_timezone() {
		return $this->timezone;
	}

	function get_use_builder() {
		return $this->use_builder;
	}

	function get_builder() {
		return $this->builder;
	}
}
?>