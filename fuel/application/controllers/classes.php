<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Classes extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/classes', $data);
		$this->load->view('footer', $data);

	}

	public function phase_program()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/phase_program.php');
		$this->load->view('footer');

	}

	public function muy_thai_thai_boxing()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/muy_thai.php');
		$this->load->view('footer');

	}

	public function jeet_kune_do()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/jeet_kune_do.php');
		$this->load->view('footer');

	}

	public function filipino_kali_weaponry()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/kali.php');
		$this->load->view('footer');

	}

	public function dirty_boxing()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/dirty_boxing.php');
		$this->load->view('footer');

	}

	public function womens_kickboxing()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/womens_kickboxing.php');
		$this->load->view('footer');

	}

	public function fitness()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/fitness.php');
		$this->load->view('footer');

	}

	public function specialty_programs()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/specialty_programs.php');
		$this->load->view('footer');

	}
}

?>