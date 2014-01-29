<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Schedule extends CI_Controller {

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
		$this->load->view('schedule', $data);
		$this->load->view('footer', $data);

	}
}

?>