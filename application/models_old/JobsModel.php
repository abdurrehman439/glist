<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class JobsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_jobs($imgpath)
    {
        $dataJobs = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'salary' => $this->input->post('salary'),
            'currency' => $this->input->post('currency'),
            'job_description' => $this->input->post('job-description'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'type' => $this->input->post('jobs-type'),
            'status' => $this->input->post('jobs-status'),
            'industry' => $this->input->post('jobs-industry'),
            'function' => $this->input->post('jobs-function'),
            'experience' => $this->input->post('jobs-experience'),
            'education' => $this->input->post('jobs-education'),
            'skill' => $this->input->post('jobs-skill'),
            'software' => $this->input->post('jobs-software'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id'),
            'created_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('jobs', $dataJobs);
    }

    public function edit_jobs($imgpath)
    {
        $dataJobs = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'salary' => $this->input->post('salary'),
            'currency' => $this->input->post('currency'),
            'job_description' => $this->input->post('job-description'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'type' => $this->input->post('jobs-type'),
            'status' => $this->input->post('jobs-status'),
            'industry' => $this->input->post('jobs-industry'),
            'function' => $this->input->post('jobs-function'),
            'experience' => $this->input->post('jobs-experience'),
            'education' => $this->input->post('jobs-education'),
            'skill' => $this->input->post('jobs-skill'),
            'software' => $this->input->post('jobs-software'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('jobs_id',$this->input->post('jobs_id'));
        return $this->db->update('jobs', $dataJobs);
    }

    public function filter()
    {
        if( sizeof($this->input->post('type')) > 0 )
            $this->db->where_in('type',$this->input->post('type'));
        
        if( sizeof($this->input->post('status')) > 0 )
            $this->db->where_in('status',$this->input->post('status'));

        if( sizeof($this->input->post('industry')) > 0 )
            $this->db->where_in('industry',$this->input->post('industry'));

        if( sizeof($this->input->post('function')) > 0 )
            $this->db->where_in('function',$this->input->post('function'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    public function loadmore_filter($jobs_id)
    {
        if( sizeof($this->input->post('type')) > 0 )
            $this->db->where_in('type',$this->input->post('type'));
        
        if( sizeof($this->input->post('status')) > 0 )
            $this->db->where_in('status',$this->input->post('status'));

        if( sizeof($this->input->post('industry')) > 0 )
            $this->db->where_in('industry',$this->input->post('industry'));

        if( sizeof($this->input->post('function')) > 0 )
            $this->db->where_in('function',$this->input->post('function'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->where('date >= CURDATE()');
        $this->db->where('jobs_id <',$jobs_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    /*public function type_filter($type_array)
    {
        $this->db->where_in('type',$type_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    public function loadmore_type_filter($type_array,$jobs_id)
    {
        $this->db->where_in('type',$type_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('jobs_id <',$jobs_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }
    
    public function status_filter($status_array)
    {
        $this->db->where_in('status',$status_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    public function loadmore_status_filter($status_array,$jobs_id)
    {
        $this->db->where_in('status',$status_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('jobs_id <',$jobs_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }
  
    public function type_status_filter($type_array,$status_array)
    {
        $this->db->where_in('type',$type_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('status',$status_array);
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    public function loadmore_type_status_filter($type_array,$status_array,$jobs_id)
    {
        $this->db->where_in('type',$type_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('status',$status_array);
        $this->db->where('date >= CURDATE()');
        $this->db->where('jobs_id <',$jobs_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    public function currency_filter()
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }
    public function loadmore_currency_filter($jobs_id)
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('jobs_id <',$jobs_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }*/

    public function no_filter()
    {
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }
    
    public function loadmore_no_filter($jobs_id)
    {
        $this->db->where('date >= CURDATE()');
        $this->db->where('jobs_id <',$jobs_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('jobs');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `jobs` WHERE `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$jobs_id)
    {
        $query = "SELECT * FROM `jobs` WHERE `jobs_id` < ". $jobs_id ." AND `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('jobs_id',$id);
        return $this->db->get('jobs');
    }

    public function user_jobs_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('jobs')->result_array();
    }

    public function user_favourite_jobs_detail($user_id, $post_ids){
        $this->db->where_in('jobs_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('jobs')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('jobs_id',$id);
        return $this->db->delete('jobs');
    }
}
