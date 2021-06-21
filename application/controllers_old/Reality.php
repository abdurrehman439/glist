<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reality extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('RealityModel');
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
		$this->load->view('html/reality-page',$user);
		$this->load->view('includes/footer');
    }

    public function insert(){

        $this->load->helper('security');
        
        $this->form_validation->set_rules('openhouse-date', 'Openhouse Date', 'required');
        $this->form_validation->set_rules('open-hour', 'Open Hour', 'required');
        $this->form_validation->set_rules('close-hour', 'Close Hour', 'required');
        $this->form_validation->set_rules('reality-category', 'Category', 'required');
        $this->form_validation->set_rules('reality-type', 'Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('details', 'Details', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-name', 'Contact Name', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-number', 'Contact Number', 'required|numeric|greater_than[0]|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('contact-email', 'Contact Email', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-website', 'Contact Website', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('profile-privacy', 'Profile Privacy', 'required');
        $this->form_validation->set_rules('reality-bed', 'Bed', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('reality-bath', 'Bath', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('reality-lot', 'Lot', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-sewerage', 'Sewerage', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-water', 'Water', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-gas', 'Gas', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-tax', 'Tax', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('reality-mls', 'MLS', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('currency', 'Currency', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/") ,
                'allowed_types' => 'gif|jpg|png',
                'file_name'=>$this->session->userdata('user_id')."_".time()."_reality.jpg"
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

            $this->RealityModel->insert_reality($path);

            echo json_encode( array('success' => "Reality Listing has been Added.....!") );
        }
    }

    public function edit(){

        $this->load->helper('security');
        
        $this->form_validation->set_rules('openhouse-date', 'Openhouse Date', 'required');
        $this->form_validation->set_rules('open-hour', 'Open Hour', 'required');
        $this->form_validation->set_rules('close-hour', 'Close Hour', 'required');
        $this->form_validation->set_rules('reality-category', 'Category', 'required');
        $this->form_validation->set_rules('reality-type', 'Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('details', 'Details', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-name', 'Contact Name', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-number', 'Contact Number', 'required|numeric|greater_than[0]|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('contact-email', 'Contact Email', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-website', 'Contact Website', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('profile-privacy', 'Profile Privacy', 'required');
        $this->form_validation->set_rules('reality-bed', 'Bed', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('reality-bath', 'Bath', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('reality-lot', 'Lot', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-sewerage', 'Sewerage', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-water', 'Water', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-gas', 'Gas', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('reality-tax', 'Tax', 'required|numeric|greater_than[0]|max_length[10]');
        $this->form_validation->set_rules('reality-mls', 'MLS', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('currency', 'Currency', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/") ,
                'allowed_types' => 'gif|jpg|png',
                'file_name'=>$this->session->userdata('user_id')."_".time()."_reality.jpg"
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

            $this->RealityModel->edit_reality($path);

            echo json_encode( array('success' => "Reality Listing has been Edited.....!") );
        }
    }

    public function filters(){
        
        $date_array = array();
        for( $i = 0 ; $i < sizeof( $this->input->post('date') ) ; $i++)
            $date_array[] = date( 'Y-m-d' , strtotime($this->input->post('date')[$i]) );

        if( $this->input->post('index') == 0 ){
            $query = $this->RealityModel->filter($date_array);
        }
        else{
            $query = $this->RealityModel->loadmore_filter($date_array,$this->input->post('index'));
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
            $query = $this->RealityModel->no_filter();
        }
        else{
            $query = $this->RealityModel->loadmore_no_filter($this->input->post('index'));
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
            $query = $this->RealityModel->search($this->input->post('keyword'));
        }
        else{
            $query = $this->RealityModel->loadmore_search($this->input->post('keyword'),$this->input->post('index'));
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
        
        $query = $this->RealityModel->post_details($id);

        $header = array();
        $header['menu'] = "";
        
        $data = array();
		$data['post'] = $query->result();
        
		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/reality-details',$data);
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
            $post = $this->RealityModel->post_details($id);
            $post = $post->result();
            
            if( sizeof( $post ) > 0 )
            {
                if($post[0]->user_id == $this->session->userdata('user_id'))
                {
                    $this->RealityModel->delete_post($id);
                    $this->session->set_flashdata("success_message", "Requested Reality post deleted successfully!");
                    redirect("user/my_listing");
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Reality post doesn't belongs to you!");
                    redirect("user/my_listing");
                }
            }
            else
            {
                $this->session->set_flashdata("error_message", "Requested Reality post doesn't exists!");
                redirect("user/my_listing");
            }
        }
    }
}
