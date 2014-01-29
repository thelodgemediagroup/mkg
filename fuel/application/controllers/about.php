<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class About extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('about/about', $data);
		$this->load->view('footer', $data);

	}
/*
	public function mission()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('about/mission_statement.php');
		$this->load->view('footer');

	}
*/
	public function mkg_international()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('about/mkg_international.php');
		$this->load->view('footer');

	}

	public function staff()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('about/staff.php');
		$this->load->view('footer');

	}

}

?>