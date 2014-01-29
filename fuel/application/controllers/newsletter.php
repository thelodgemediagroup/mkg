<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Newsletter extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

	}

	private static $request_url;

	public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		$name = $this->input->post('name', TRUE);
		$email = $this->input->post('email', TRUE);
		$time = time();
		$ip = $this->input->ip_address();

		$head = $this->input->request_headers();

		if ($head['Referer'] != base_url('newsletter') && !isset($this->request_url))
		{
			$this->set_request_url($head['Referer']);
		}
		else
		{
			$this->set_request_url(base_url());
		}

		if ($this->form_validation->run() == FALSE)
		{		

			$this->load->view('header', $data);
			$this->load->view('newsletter_error', $data);
			$this->load->view('footer', $data);

		}
		else
		{
			$arr = array(
				'name' => $name,
				'email' => $email,
				'timestamp' => $time,
				'ip_address' => $ip
				);
			$query = $this->db->insert('newsletter', $arr);
			if ($query)
			{
				redirect($this->get_request_url());
			}
		}

	}

	private function set_request_url($url)
	{
		$this->request_url = $url;
	}

	private function get_request_url()
	{
		return $this->request_url;
	}

}

?>