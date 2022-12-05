
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('UserModel','usermodel');
	}



	public function newUser(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'lastName', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.uEmail]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == false) {
			$response = array(
				'status' => 'error',
				'message' => validation_errors()
			);
		}
		else {
			$userData = array(
				'uFirstName' => $this->input->post('fname', true),
				'uLastName' => $this->input->post('fname', true),
				'uEmail' => $this->input->post('email', true),
				'uPassword' => $this->input->post('password', true),
				'uDate' => date('y-m-d h:i:sa')
			);

			$id = $this->usermodel->insert_user($userData);

			$response = array(
				'status' => 'success',
				'message' => "user created successfully"
			);
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
}
?>
