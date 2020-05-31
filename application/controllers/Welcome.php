<?php

class Welcome extends CI_Controller {

	public function index()
	{
		$title['title'] = 'Welcome';
		$data['users'] = $this->register_model->get_user();
		
        $this->load->view('templates/header', $title);
        $this->load->view('welcome', $data);
        $this->load->view('templates/footer');
	}
}
