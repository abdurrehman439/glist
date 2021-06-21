<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShortTermHiring extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('ShortTermHiringModel');
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->database();
		
		if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not Logged In.....!");
            redirect("/");
        }
	}
    
    public function index()
	{
		$header = array();
		
		$header['menu'] = "browse";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
        }
        
        $user = array();
        $user['zip_code'] = $this->session->userdata('zip_code');
        $user['range'] = $this->session->userdata('range');

		$this->load->view('includes/header',$header);
		$this->load->view('html/short-term-hiring-page',$user);
		$this->load->view('includes/footer');
    }

    public function insert(){

        $this->load->helper('security');
        
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('currency', 'Currency', 'required');

		$this->form_validation->set_rules('business-name', 'Business Name', 'required|min_length[3]|max_length[255]');
		
		$this->form_validation->set_rules('pay', 'Pay', 'required|greater_than[0]|min_length[1]');		
        $this->form_validation->set_rules('pay-duration', 'Pay Type', 'required');
		
		$this->form_validation->set_rules('tags', 'Tags', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('open-hour', 'Open Hour', 'required');
        $this->form_validation->set_rules('close-hour', 'Close Hour', 'required');
        $this->form_validation->set_rules('expected-hours', 'Expected Hours', 'required|numeric|greater_than[0]|max_length[15]');
        $this->form_validation->set_rules('short-term-hiring-category', 'Category', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('work-details', 'Work Details', 'required|min_length[3]|max_length[255]');

		$this->form_validation->set_rules('address', 'Address', 'required|min_length[3]|max_length[255]');
		
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-name', 'Contact Name', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-number', 'Contact Number', 'required|numeric|greater_than[0]|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('contact-email', 'Contact Email', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('contact-website', 'Contact Website', 'required|min_length[3]|max_length[255]');
		
		$this->form_validation->set_rules('social-facebook', 'Facebook Link', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('social-twitter', 'Twitter Link', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('social-linkedin', 'Linkedin Link', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('social-instagram', 'Instagram Link', 'required|min_length[3]|max_length[255]');
        
        if ($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/") ,
                'allowed_types' => 'gif|jpg|png',
                'file_name'=>$this->session->userdata('user_id')."_".time()."_short-term-hiring.jpg"
            );

            $path = array();
            $files = $_FILES;
            $number_of_files = count($_FILES['files']['name']);
            $this->load->library('upload',$UploadPreferences);
            
            for( $i=0; $i < $number_of_files - 1; $i++ )
            {
                $_FILES['files']['name']= $files['files']['name'][$i];
                $_FILES['files']['type']= $files['files']['type'][$i];
                $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
                $_FILES['files']['error']= $files['files']['error'][$i];
                $_FILES['files']['size']= $files['files']['size'][$i];    
        
                $this->upload->initialize($UploadPreferences);
                $this->upload->do_upload('files');
                
                $photoInfo = $this->upload->data();
                $path[]="uploads/".$this->session->userdata('user_name')."/".$photoInfo['file_name'];
            }
            
            $path = json_encode($path);

            $this->ShortTermHiringModel->insert_short_term_hiring($path);

            echo json_encode( array('success' => "Short Term Hiring Listing has been Added.....!") );
        }
    }

    public function edit(){

        $this->load->helper('security');
        
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('currency', 'Currency', 'required');

		$this->form_validation->set_rules('business-name', 'Business Name', 'required|min_length[3]|max_length[255]');
		
		$this->form_validation->set_rules('pay', 'Pay', 'required|greater_than[0]|min_length[1]');		
        $this->form_validation->set_rules('pay-duration', 'Pay Type', 'required');
		
		$this->form_validation->set_rules('tags', 'Tags', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('open-hour', 'Open Hour', 'required');
        $this->form_validation->set_rules('close-hour', 'Close Hour', 'required');
        $this->form_validation->set_rules('expected-hours', 'Expected Hours', 'required|numeric|greater_than[0]|max_length[15]');
        $this->form_validation->set_rules('short-term-hiring-category', 'Category', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('work-details', 'Work Details', 'required|min_length[3]|max_length[255]');

		$this->form_validation->set_rules('address', 'Address', 'required|min_length[3]|max_length[255]');
		
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-name', 'Contact Name', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-number', 'Contact Number', 'required|numeric|greater_than[0]|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('contact-email', 'Contact Email', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('contact-website', 'Contact Website', 'required|min_length[3]|max_length[255]');
		
		$this->form_validation->set_rules('social-facebook', 'Facebook Link', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('social-twitter', 'Twitter Link', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('social-linkedin', 'Linkedin Link', 'required|min_length[3]|max_length[255]');
		$this->form_validation->set_rules('social-instagram', 'Instagram Link', 'required|min_length[3]|max_length[255]');
        
        if ($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/") ,
                'allowed_types' => 'gif|jpg|png',
                'file_name'=>$this->session->userdata('user_id')."_".time()."_short-term-hiring.jpg"
            );

            if( $this->input->post('previous-images') != null )
                $path = $this->input->post('previous-images');
            else
                $path = array();
            
            $files = $_FILES;
            $number_of_files = count($_FILES['files']['name']);
            $this->load->library('upload',$UploadPreferences);
            
            for( $i=0; $i < $number_of_files - 1; $i++ )
            {
                $_FILES['files']['name']= $files['files']['name'][$i];
                $_FILES['files']['type']= $files['files']['type'][$i];
                $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
                $_FILES['files']['error']= $files['files']['error'][$i];
                $_FILES['files']['size']= $files['files']['size'][$i];    
        
                $this->upload->initialize($UploadPreferences);
                $this->upload->do_upload('files');
                
                $photoInfo = $this->upload->data();
                $path[]="uploads/".$this->session->userdata('user_name')."/".$photoInfo['file_name'];
            }
            
            $path = json_encode($path);

            $this->ShortTermHiringModel->edit_short_term_hiring($path);

            echo json_encode( array('success' => "Short Term Hiring Listing has been Edited.....!") );
        }
    }
    
    public function filters(){
        if( $this->input->post('index') == 0 ){
            if( sizeof($this->input->post('category')) > 0 )
            {
                $query = $this->ShortTermHiringModel->category_filter($this->input->post('category'));
            }
            else
            {
                return print_r(json_encode(array('result'=>"No results found")));
            }
        }
        else{
            if( sizeof($this->input->post('category')) > 0 )
            {
                $query = $this->ShortTermHiringModel->loadmore_category_filter($this->input->post('category'),$this->input->post('index'));
            }
            else
            {
                return print_r(json_encode(array('result'=>"No results found")));
            }
        }
        
        if(count($query->result()) == 0)
        {
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else
        {
            return print_r(json_encode($query->result()));
        }
    }
    
    public function no_filter()
    {   
        if( $this->input->post('index') == 0 ){
            $query = $this->ShortTermHiringModel->no_filter();
        }
        else{
            $query = $this->ShortTermHiringModel->loadmore_no_filter($this->input->post('index'));
        }
        
        if(count($query->result()) == 0)
        {
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else
        {
            return print_r(json_encode($query->result()));
        }
    }

    public function search()
    {  
        if( $this->input->post('index') == 0 ){
            $query = $this->ShortTermHiringModel->search($this->input->post('keyword'));
        }
        else{
            $query = $this->ShortTermHiringModel->loadmore_search($this->input->post('keyword'),$this->input->post('index'));
        }

        if(count($query->result()) == 0)
  		{
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else
        {
            return print_r(json_encode($query->result()));
        }
    }

    public function zipcode()
    {  
        if($this->input->post('zipcode') == "" || $this->input->post('range') == "")
  		{
            return print_r(json_encode(array('result'=>"error1")));
        }
        else if($this->input->post('range') < 1)
        {
            return print_r(json_encode(array('result'=>"error2")));
        }
        else
        {
            $this->session->set_userdata('zip_code',$this->input->post('zipcode'));
            $this->session->set_userdata('range',$this->input->post('range'));
            return print_r(json_encode(array('result'=>"success")));
        }
    }

    public function post_details($id){
        
        $query = $this->ShortTermHiringModel->post_details($id);

        $header = array();
        $header['menu'] = "";
        
        $data = array();
		$data['post'] = $query->result();
        
		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/short-term-hiring-details',$data);
		$this->load->view('includes/footer');
    }

    public function delete($id = '')
    {
        if($id == '')
        {
            $this->session->set_flashdata("error_message", "Bad Request!");
            redirect("user/my_listing");
        }
        else
        {
            $post = $this->ShortTermHiringModel->post_details($id);
            $post = $post->result();
            
            if( sizeof( $post ) > 0 )
            {
                if($post[0]->user_id == $this->session->userdata('user_id'))
                {
                    $this->ShortTermHiringModel->delete_post($id);
                    $this->session->set_flashdata("success_message", "Requested Short Term Hiring post deleted successfully!");
                    redirect("user/my_listing");
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Short Term Hiring post doesn't belongs to you!");
                    redirect("user/my_listing");
                }
            }
            else
            {
                $this->session->set_flashdata("error_message", "Requested Short Term Hiring post doesn't exists!");
                redirect("user/my_listing");
            }
        }
    }
}
