<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('ChatModel');
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->database();
	}

    function index()
    {
		$header = array();
		
		$header['menu'] = "browse";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
        }
		else{
            redirect("/home");
        }
        
        $user = array();
        $user['user_id'] = $this->session->userdata('user_id');
        $user['user_name'] = $this->session->userdata('user_name');
        $user['zip_code'] = $this->session->userdata('zip_code');
        $user['range'] = $this->session->userdata('range');
        
        $user['profile_picture'] = $this->ChatModel->get_profile_picture($this->session->userdata('user_id'));
		
        $user['last_chat_id'] = $this->ChatModel->last_chat_id();

		$this->load->view('includes/header',$header);
		$this->load->view('html/chat',$user);
		$this->load->view('includes/footer');
	}

	public function zipcode()
    {  
		$this->session->set_userdata('zip_code',$this->input->post('zipcode'));
		redirect("/Chat");
	}
	
	public function fetch_message()
    {  
		$result = $this->ChatModel->fetch_message($_POST['id']);
		if(count($result) == 0){
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else{
            return print_r(json_encode( $result ));
        }
		
    }
}
