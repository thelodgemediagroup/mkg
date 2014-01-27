<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Calendar extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('Gcalendar/gcalendar');

	}

	public function index()
	{
		$this->load->helper('object');

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$data['cal'] = $this->gcalendar->get_calendar();
		$this->firephp->log($data['cal']);
		$this->load->view('header', $data);
		$this->load->view('format', $data);
		$this->load->view('footer', $data);

	}

}

?>