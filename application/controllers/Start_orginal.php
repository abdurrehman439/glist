<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('StoreClosuresModel');
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->database();

		if($this->session->userdata('user_id')){
            redirect("/home");
        }
	}

    function index()
    {
		$this->load->view('html/landing');
	}
	 function index2()
    {
		$this->load->view('html/landing2');
	}
	
	function login()
    {
		$this->load->view('html/sign-in');
	}
	
	function register()
    {
		$this->load->view('html/register');
	}
	
	function terms_and_conditions()
    {
		$this->load->view('html/terms-and-conditions');
    }
}
