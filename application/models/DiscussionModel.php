<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DiscussionModel extends CI_Model{

    public function __construct()
   	{
		$this->load->database();
    }

    public function get_group_comments($group_id=0){


        $this -> db -> select('*,(select count(*) from group_discussion as gpd where gpd.g_fkid='.$group_id.') as totalmsg,
            (select full_name from users where  users.user_id=group_discussion.gd_member_id)as full_name,
           (select profile_picture from profile_info where profile_info.user_id=group_discussion.gd_member_id)as profile_picture');
        
        $this -> db -> from('group_discussion');
        $this -> db -> limit(100);
        $this-> db ->order_by("gd_date", "DESC");
        if($group_id > 0){
            $this -> db->where ('g_fkid',$group_id);
        }
        return $this -> db-> get()->result_array();


    }
    public function get_comments($comment_id=0){

        $this->load->model('UserModel');
                $result = $this->UserModel->user_detail($this->session->userdata('user_id'));
                $city = $result->result_array()[0]['zip_code'];
                $zip_code1 = $result->result_array()[0]['zip_code1'];
                if(trim($city) =='' and trim($zip_code1)==''){
                    $array['error']='Error';
                    $array['message']='Please update zip_code/city';
                return $array;
                }
                
    	$this -> db -> select('*,(select count(*) from comments as cmt where cmt.parent_comment_id =comments.comment_id) as reply,
            (select full_name from users where users.user_id=comments.commentor_id)as full_name,
           (select profile_picture from profile_info where profile_info.user_id=comments.commentor_id)as profile_picture');
    	$this -> db -> from('comments');

//        $this->db->join('users', "users.user_id = comments.commentor_id and zip_code='$zip_code'");

    	$this -> db -> limit(100);
        $this-> db ->order_by("date", "DESC");
        $this -> db->where ('parent_comment_id',0);
            
            if(!empty(trim($zip_code1))){
                        $this -> db->where ('zip_code',$zip_code1);
            }else{
                    $this -> db->where ('city',$city);
            }

        if($comment_id > 0){
            $this -> db->where ('comment_id',$comment_id);
        }

    	return $this -> db-> get()->result_array();
    }

    public function get_Reply_comments($commentID,$lastcommentID){

            $this -> db -> select('*,(select count(*) from comments as cmt where cmt.parent_comment_id =comments.comment_id) as reply,
                (select full_name from users where users.user_id=comments.commentor_id)as full_name,
               (select profile_picture from profile_info where profile_info.user_id=comments.commentor_id)as profile_picture');
            $this -> db -> from('comments');
           
            $this-> db ->order_by("date", "asc");

            $this -> db->where ('parent_comment_id',$commentID);
            
            if($lastcommentID > 0){
                $this -> db->where ("comment_id > $lastcommentID");
            }

        return $this -> db-> get()->result_array();

    }

    public function Insert_comments(){
           if(!empty(trim ($this->input->post('comment') ) ) ){

                $this->load->model('UserModel');
        $result = $this->UserModel->user_detail($this->session->userdata('user_id'));
        $city = $result->result_array()[0]['zip_code'];
        $zip_code1 = $result->result_array()[0]['zip_code1'];

            $data = array(
                'comment' =>$this->input->post('comment'),
                'commentor_id' => $this->session->userdata('user_id'),
                'city' => $city,
                'zip_code' =>$zip_code1
            );
            $this->db->insert('comments', $data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }else{
            return 0;
        }
    }


    public function Insert_Groupcomments($group_id){

           if(!empty(trim ($this->input->post('comment') ) ) ){
            $data = array(
                'gd_message' =>$this->input->post('comment'),
                'gd_member_id' => $this->session->userdata('user_id'),
                'g_fkid' => $group_id
            );
            $this->db->insert('group_discussion', $data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }else{
            return 0;
        }
    }


    public function Insert_Reply_comments(){


           if(!empty(trim ($this->input->post('comment') ) ) ){
            $data = array(
                'comment' =>$this->input->post('comment'),
                'commentor_id' => $this->session->userdata('user_id'),
                'parent_comment_id' => $this->input->post('commentId')
            );
            $this->db->insert('comments', $data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }else{
            return 0;
        }
    }

    

    public function AddGroup($g_name,$g_description,$imagepath){

                 $this->load->model('UserModel');
                $result = $this->UserModel->user_detail($this->session->userdata('user_id'));
                $city = $result->result_array()[0]['zip_code'];
                $zip_code = $result->result_array()[0]['zip_code1'];
                    $data = array(
                        'g_name' =>$g_name,
                        'g_description' => $g_description,
                        'g_image'=>$imagepath,
                        'g_city' => $city,
                        'g_zipcode' =>$zip_code,
                        'user_id'=>$this->session->userdata('user_id')
                    );
                    $this->db->insert('groups', $data);
                    $g_fkid = $this->db->insert_id();

                    $data = array(
                        'g_fkid' =>$g_fkid,
                        'g_member_id' => $this->session->userdata('user_id'),
                        'g_status'=>1
                    );
                    $this->db->insert('group_members', $data);
                    $gm_fkid = $this->db->insert_id();

                    if($gm_fkid > 0){
                        return $gm_fkid;
            
                    }else{
                        return 0;
                    }

                  }

public function get_groups($g_id=0){

         $this->load->model('UserModel');
                $result = $this->UserModel->user_detail($this->session->userdata('user_id'));
                $city = $result->result_array()[0]['zip_code'];
                $zip_code1 = $result->result_array()[0]['zip_code1'];
                if(trim($city) =='' and trim($zip_code1)==''){
                    $array['error']='Error';
                    $array['message']='Please update zip_code/city';
                return $array;
                }
                
                $this -> db -> select('groups.*
                    ,(select count(g_member_id) from group_members where g_fkid=groups.g_id and g_status=1) as members
                    ,(select count(g_member_id) from group_members where g_member_id='.$this->session->userdata('user_id').' and g_status=1 and g_fkid=groups.g_id) as isMember
                    ');
                 $this -> db -> from('groups');
                $this -> db -> limit(100);
                $this-> db ->order_by("g_createddate", "DESC");
                if(!empty(trim($zip_code1))){
                        $this -> db->where ('g_zipcode',$zip_code1);
                }else{
                    $this -> db->where ('g_city',$city);
                }

                if($g_id > 0){
                $this -> db->where ('g_id',$g_id);
                }
                return $this -> db-> get()->result_array();
    }

    public function get_GroupMembers($g_id){

         $this -> db -> select("group_members.*,(select full_name from users where users.user_id=group_members.g_member_id)as full_name,
           (select profile_picture from profile_info where profile_info.user_id=group_members.g_member_id)as profile_picture");

        $this -> db  ->from('group_members');
         $this-> db->join('users', 'users.user_id = group_members.g_member_id');

         $this -> db ->where("g_fkid=$g_id and g_status=1");
       return  $this -> db-> get()->result_array();
    }


        public function GroupLeaveJoin($g_id,$type){


            $this -> db -> select('g_member_id')-> from('group_members')->where ('g_fkid',$g_id);
             //    $this -> db->where ('g_status',1);
            $group_member=$this -> db->where ('g_member_id',$this->session->userdata('user_id'))-> get()->result_array();
 
            if(count($group_member) > 0){
                //update
                    $where=array('g_fkid' =>$g_id,
                                'g_member_id'=> $this->session->userdata('user_id')
                            );
                    $data = array(
                        'g_status'=>$type
                    );
                $this->db->where($where);
                $this->db->update('group_members', $data );

            }elseif(count($group_member) == 0){
                    $data = array(
                        'g_fkid' =>$g_id,
                        'g_member_id' => $this->session->userdata('user_id'),
                        'g_status'=>1
                    );
                    $this->db->insert('group_members', $data);
            }                 
             return true;
        }


            public function UpdateGroup($g_name,$g_description,$imagepath,$g_id){
                    
                     $data = array(
                        'g_name' =>$g_name,
                        'g_description' => $g_description
                    );
                    if(!empty($imagepath)){
                        $data['g_image']=$imagepath;
                    }
                    $where=array('g_id' =>$g_id,
                                'user_id'=> $this->session->userdata('user_id')
                            );
                $this->db->where($where);
                
                    if($this->db->update('groups', $data )){
                        return 1;
                    }else{
                        return 0;
                    }

                  }

            public function DeleteGroup($g_id){

                    $this->db->delete('groups', array('g_id' => $g_id,'user_id'=>$this->session->userdata('user_id')) );
                   
                    if($this->db->affected_rows()){

                        $this->db->delete('group_members', array('g_fkid' => $g_id));
                        $this->db->delete('group_discussion', array('g_fkid' => $g_id));
                        return 1;
                  
                    }else{
                        return 0;
                      }

                    }



}
