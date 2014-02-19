<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Friends extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('friends', $data);
		$this->load->view('footer', $data);

	}

}

?>