<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('g-recaptcha-response', 'captcha', 'required');

        $title['title'] = 'Register';

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $title);
            $this->load->view('register/index');
            $this->load->view('templates/footer');
        } else {
            $this->email->from($this->input->post('email'), 'Ali Mubarak');
            $this->email->to('alihlwhf@alihussainfoto.com');
            $this->email->subject('Email conformation');
            $this->email->message('You receive an email conformation');

            if (!$this->email->send()) {
                $this->session->set_flashdata("email_sent", "Error in sending Email.");
            } else {
                $this->session->set_flashdata("email_sent", "Email sent successfully.");
                $this->register_model->get_register();
                redirect('welcome');
            }
        }
    }

    public function validate_captcha()
    {
        $captcha = $this->input->post('g-recaptcha-response');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LftT_0UAAAAAPFhCOtF85odYVG8ubwWJXyeSmSC&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return false;
        } else {
            return true;
        }
    }
}