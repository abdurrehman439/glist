<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LearningsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_learnings($imgpath)
    {
        $dataLearnings = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'country' => $this->input->post('hire-a-resource-country'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('learnings-category'),
            'details' => $this->input->post('details'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id'),
            'created_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('learnings', $dataLearnings);
    }

    public function edit_learnings($imgpath)
    {
        $dataLearnings = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('learnings-category'),
            'details' => $this->input->post('details'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('learnings_id',$this->input->post('learnings_id'));
        return $this->db->update('learnings', $dataLearnings);
    }
    
    public function filter()
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
            
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('learnings');
    }

    public function loadmore_filter($learnings_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        $this->db->where('learnings_id <',$learnings_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('learnings');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('learnings');
    }
    
    public function loadmore_no_filter($learnings_id)
    {
        $this->db->where('learnings_id <',$learnings_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('learnings');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `learnings` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$learnings_id)
    {
        $query = "SELECT * FROM `learnings` WHERE `learnings_id` < ". $learnings_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('learnings_id',$id);
        return $this->db->get('learnings');
    }

    public function user_learnings_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('learnings')->result_array();
    }

    public function user_favourite_learnings_detail($user_id, $post_ids){
        $this->db->where_in('learnings_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('learnings')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('learnings_id',$id);
        return $this->db->delete('learnings');
    }
}