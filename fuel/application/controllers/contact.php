<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Contact extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('email');
	}

	private $request_url;

	public function index()
	{

		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->load->view('header', $data);
		$this->load->view('contact', $data);
		$this->load->view('footer', $data);

	}

	public function email()
	{
		$data['navigation'] = $this->load->view('navigation', '', TRUE);

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim');

		$name = $this->input->post('name', TRUE);
		$email = $this->input->post('email', TRUE);
		$subject = $this->input->post('subject', TRUE);
		$message = $this->input->post('message', TRUE);
		$time = time();
		$ip = $this->input->ip_address();

		if ($this->form_validation->run() == FALSE)
		{		

			$this->load->view('header', $data);
			$this->load->view('contact_error', $data);
			$this->load->view('footer', $data);

		}
		else
		{

			$this->email->from($email, $name);
			$this->email->to('info@mkgdetroit.com');
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();

			$arr = array(
				'name'       => $name,
				'email'      => $email,
				'timestamp'  => $time,
				'ip_address' => $ip
				);
			$query = $this->db->insert('newsletter', $arr);
			if ($query)
			{
				redirect(base_url());
			}
		}

	}

}

?>