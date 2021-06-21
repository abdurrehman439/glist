<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ServiceRequireModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_service_require($imgpath)
    {
        $dataServiceRequire = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'category' => $this->input->post('service-require-category'),
            'currency' => $this->input->post('currency'),
            'job_description' => $this->input->post('job-description'),
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
        return $this->db->insert('service_require', $dataServiceRequire);
    }

    public function edit_service_require($imgpath)
    {
        $dataServiceRequire = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'category' => $this->input->post('service-require-category'),
            'currency' => $this->input->post('currency'),
            'job_description' => $this->input->post('job-description'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('service_require_id',$this->input->post('service_require_id'));
        return $this->db->update('service_require', $dataServiceRequire);
    }

    public function get_current_service_require_id()
    {
        $this->db->select_max('service_require_id');
        $result = $this->db->get('service_require')->row_array();
        return $result['service_require_id'];
    }
    
    public function get_service_providers_id($category)
    {
        $this->db->select('user_id');
        $this->db->where('category', $category);
        $result = $this->db->get('service_providers');
        return $result->result_array();
    }

    public function get_service_providers($user_ids)
    {
        $this->db->select('email');
        $this->db->where_in('user_id', $user_ids);
        $this->db->where('profession', 'service-provider');
        $result = $this->db->get('users');
        return $result->result_array();
    }

    public function filter($date_array)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);
        
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }

    public function loadmore_filter($date_array,$service_require_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);
        
        $this->db->where('date >= CURDATE()');
        $this->db->where('service_require_id <',$service_require_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }

    public function loadmore_category_filter($category_array,$service_require_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('date >= CURDATE()');
        $this->db->where('service_require_id <',$service_require_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }
    
    public function date_filter($date_array)
    {
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }

    public function loadmore_date_filter($date_array,$service_require_id)
    {
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->where('service_require_id <',$service_require_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }
  
    public function category_date_filter($category_array,$date_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }

    public function loadmore_category_date_filter($category_array,$date_array,$service_require_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->where('service_require_id <',$service_require_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }*/

    public function no_filter()
    {
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }
    
    public function loadmore_no_filter($service_require_id)
    {
        $this->db->where('date >= CURDATE()');
        $this->db->where('service_require_id <',$service_require_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_require');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `service_require` WHERE `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$service_require_id)
    {
        $query = "SELECT * FROM `service_require` WHERE `service_require_id` < ". $service_require_id ." AND `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('service_require_id',$id);
        return $this->db->get('service_require');
    }

    public function user_service_require_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('service_require')->result_array();
    }

    public function user_favourite_service_require_detail($user_id, $post_ids){
        $this->db->where_in('service_require_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('service_require')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('service_require_id',$id);
        return $this->db->delete('service_require');
    }
}