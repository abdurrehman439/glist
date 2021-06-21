<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comingsoon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');

		if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not Logged In.....!");
            redirect("/");
        }
	}

	public function index()
	{
		$this->load->view('comingsoon/index');
	}
	
}
