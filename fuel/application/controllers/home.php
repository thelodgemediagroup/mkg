<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('Gcalendar/gcalendar');

	}

	public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$data['cal'] = $this->gcalendar->get_calendar();

		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);

	}

	// Demonstrate the function for all of the MKG classes
	public function event()
	{
		$event_class = 'rabbit';
		$events = $this->gcalendar->get_event_list($event_class);
		echo $events;
	}

}

?>