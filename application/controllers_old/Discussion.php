<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('UserModel');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');

		$this->load->model('DiscussionModel');
		
		if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not Logged In.....!");
            redirect("/");
        }
	}

	public function index()
	{
		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}
//print_r($this->DiscussionModel->get_comments());
		echo json_encode($this->DiscussionModel->get_comments());

	}


	public function AddComment()
	{	
		$lastId=$this->DiscussionModel->Insert_comments();
		if($lastId > 0){
			echo 1;
		}else{
			echo 0;
		}
	}

	public function replycomment(){

		$lastId=$this->DiscussionModel->Insert_Reply_comments();
		if($lastId > 0){
			echo 1;
		}else{
			echo 0;
		}
	}

	public function getReplycomments(){

			$commentID=$this->input->post('commentId');
			$lastcommentID=$this->input->post('lastcommentID');

		echo json_encode($this->DiscussionModel->get_Reply_comments($commentID,$lastcommentID));
	}

	public function AddGroup(){
		    
		     $this->form_validation->set_rules('g_name', 'Name', 'required|min_length[3]|max_length[255]');
			 $this->form_validation->set_rules('g_description', 'Description', 'required|min_length[3]');
			 $g_name=$this->input->post('g_name');
			$g_description=$this->input->post('g_description');
		 if ($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/group/") ,
                'allowed_types' => 'gif|jpg|png',
                'g_image'=>$this->session->userdata('user_id')."_".time()."_groups.jpg",
                'max_size'=>'2000'
            );

            $files = $_FILES;
            $number_of_files = count($_FILES['g_image']['name']);
            $this->load->library('upload',$UploadPreferences);
                if(empty($_FILES['g_image']['name'])){
                echo json_encode( array('validation_errors' => "Please select group image.") );
                die();
                }
                $this->upload->initialize($UploadPreferences);
                
				if (!file_exists("uploads/".$this->session->userdata('user_name')."/group/")) {
					    mkdir("uploads/".$this->session->userdata('user_name')."/group/", 0777, true);
					}

					if ( ! $this->upload->do_upload('g_image'))
					{

					 echo json_encode( array('validation_errors' => $this->upload->display_errors()) );
					 exit();
					}


                $photoInfo = $this->upload->data();
                $imagepath="uploads/".$this->session->userdata('user_name')."/group/".$photoInfo['file_name'];
            
            //echo $path ;
			if($this->DiscussionModel->AddGroup($g_name,$g_description,$imagepath)){
			    echo json_encode( array('success' => "Group has been Added.....!") );		
			}else{
				    echo json_encode( array('validation_errors' => "Error occured. Please try again!") );
        
			}
        }


	}

	public function DeleteGroup(){

		    if ($this->uri->segment(3) == FALSE)
			{			
			 $this->session->set_flashdata("error_message", "PLease try again!");
             redirect("/home");
			}
			$g_id=$this->uri->segment(3);
			if($this->DiscussionModel->DeleteGroup($g_id)){
			  $this->session->set_flashdata("success_message", "Group Deleted successfuly.");
             redirect("/home");		
			}else{
				$this->session->set_flashdata("error_message", "PLease try again!");
             redirect("/home");
			}

	}


	public function UpdateGroup(){
		    
		    if ($this->uri->segment(3) == FALSE)
			{
			   echo json_encode( array('validation_errors' => "Error occured. Please try again!") );
			}

		    $this->form_validation->set_rules('g_name', 'Name', 'required|min_length[3]|max_length[255]');
			$this->form_validation->set_rules('g_description', 'Description', 'required|min_length[3]');
			$g_name=$this->input->post('g_name');
			$g_description=$this->input->post('g_description');

		 if ($this->form_validation->run() === FALSE)
	        {
	            echo json_encode( array('validation_errors' => validation_errors()) );
	            exit();
	        }
	        else
	        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/group/") ,
                'allowed_types' => 'gif|jpg|png',
                'g_image'=>$this->session->userdata('user_id')."_".time()."_groups.jpg",
                'max_size'=>'2000'
            );
            $files = $_FILES;
            $imagepath='';
            $number_of_files = count($_FILES['g_image']['name']);
            $this->load->library('upload',$UploadPreferences);
                if(!empty($_FILES['g_image']['name'])){
	            	$this->upload->initialize($UploadPreferences);
	                
	                
	                if (!file_exists("uploads/".$this->session->userdata('user_name')."/group/")) {
					    mkdir("uploads/".$this->session->userdata('user_name')."/group/", 0777, true);
					}

			        if ( ! $this->upload->do_upload('g_image'))
			        {

					 echo json_encode( array('validation_errors' => $this->upload->display_errors()) );
					 exit();
					}

	                $photoInfo = $this->upload->data();
	                $imagepath="uploads/".$this->session->userdata('user_name')."/group/".$photoInfo['file_name'];
	               
                }

            //echo $path ;
			if($this->DiscussionModel->UpdateGroup($g_name,$g_description,$imagepath,$this->uri->segment(3))){
			    echo json_encode( array('success' => "Group updated.....!") );		
			}else{
				    echo json_encode( array('validation_errors' => "Error occured. Please try again!") );
        
			}
        }


	}

	public function Grouplist(){
				echo json_encode($this->DiscussionModel->get_groups());

	}

	public function	GroupLeaveJoin(){

			$g_id=$this->input->post('gid');
			$type=$this->input->post('type');
            //echo $path ;
			if($this->DiscussionModel->GroupLeaveJoin($g_id,$type)){
				if($type ==0){
						echo json_encode( array('success' => "Group has been leave.....!") );		
				}else{
						echo json_encode( array('success' => "Group has been join.....!") );
				}
			}else{
				    echo json_encode( array('validation_errors' => "Error occured. Please try again!") );

			}

	} 

	public function GroupDetail(){

			$header = array();

			$header['menu'] = "Group";

			if($this->session->userdata('user_id')){
				$header['user_id'] = $this->session->userdata('user_id');
			}
			if ($this->uri->segment(3) == FALSE)
			{
			  redirect('./');
			}
			else
			{
		        $group_id = $this->uri->segment(3);
	       		$data = array();
				$data['group']=$this->DiscussionModel->get_groups($group_id);
				$data['groupMembers']=$this->DiscussionModel->get_GroupMembers($group_id);

				if (count($data['group']) == 0){redirect('./');}

				$this->load->view('includes/header',$header);
				$this->load->view('html/group_detail',$data);

				$this->load->view('includes/footer');
		}
	}


	public function GroupComments(){
				if($this->session->userdata('user_id')){
						$header['user_id'] = $this->session->userdata('user_id');
					}
						 $group_id = $this->uri->segment(3);
		$group=$this->DiscussionModel->get_groups($group_id);
		if($group_id > 0 && $group[0]['isMember'] > 0){
				//print_r($this->DiscussionModel->get_comments());
					echo json_encode($this->DiscussionModel->get_group_comments($group_id));
			}else{
				$a=[];
				echo json_encode($a);				
			}

	}

	public function Add_groupComment(){

		$group_id = $this->uri->segment(3);

		$group=$this->DiscussionModel->get_groups($group_id);
		if($group_id > 0 && $group[0]['isMember'] > 0){
				$lastId=$this->DiscussionModel->Insert_Groupcomments($group_id);
				if($lastId > 0){
					echo 1;
				}else{
					echo 0;
				}
			}else{
				echo 0;	
			}

	}



}
