<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Classes extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('Gcalendar/gcalendar');

	}

	/*public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('classes/classes', $data);
		$this->load->view('footer', $data);

	} */

/*	public function phase_program()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Phase Program';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/phase_program.php', $data);
		$this->load->view('footer', $data);

	} */

	/*public function muay_thai_thai_boxing()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Muay Thai';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/muay_thai.php', $data);
		$this->load->view('footer', $data);

	}*/

/*	public function jeet_kune_do()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Jeet Kune Do';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/jeet_kune_do.php', $data);
		$this->load->view('footer', $data);

	}
*/
/*	public function filipino_kali_weaponry()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Filipino Kali Weaponry';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/kali.php', $data);
		$this->load->view('footer', $data);

	}
*/
/*	public function dirty_boxing()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Dirty Boxing/Panantukan';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/dirty_boxing.php', $data);
		$this->load->view('footer', $data);

	}*/

/*	public function womens_kickboxing()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Women\'s Kickboxing';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/womens_kickboxing.php', $data);
		$this->load->view('footer', $data);

	}*/

/*	public function fitness()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Functional Fitness';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/fitness.php', $data);
		$this->load->view('footer', $data);

	}*/

	/*public function specialty_programs()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Specialty Programs';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/specialty_programs.php', $data);
		$this->load->view('footer', $data);

	}*/

/*	public function self_protection()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$event_class = 'Self Protection';
		$data['events'] = $this->gcalendar->get_event_list($event_class);

		$this->load->view('header', $data);
		$this->load->view('classes/self_protection.php', $data);
		$this->load->view('footer', $data);

	}*/
}

?>