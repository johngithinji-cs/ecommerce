<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('UserModel','usermodel');
	}
	public function index(){

	}
	public function checkUser(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.uEmail]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$response = array(
				'status' => 'error',
				'message' => validation_errors()
			);
		}
		else {
			$userData = array(
				'uEmail' => $this->input->post('email', true),
				'uPassword' => md5($this->input->post('password', true))
			);
			$user = $this->Usermodel->checkUser($userData);
			if(count($user == 1)){
				switch($user[0]['status'])
				{
					case 0:
						echo 'User not active';
						break;
					case 1:
						echo 'create session';
						break;
					case 2:
						echo 'admin blocked you';
						break;

				}

			}else{
				echo 'the email does not exist';

			}
		}
	}

}
