<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ServiceProvidersModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_service_providers($imgpath)
    {
        $dataServiceProviders = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('service-providers-category'),
            'currency' => $this->input->post('currency'),
            'job_description' => $this->input->post('job-description'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'country' => $this->input->post('hire-a-resource-country'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id'),
            'created_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('service_providers', $dataServiceProviders);
    }

    public function edit_service_providers($imgpath)
    {
        $dataServiceProviders = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('service-providers-category'),
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
        
        $this->db->where('service_providers_id',$this->input->post('service_providers_id'));
        return $this->db->update('service_providers', $dataServiceProviders);
    }

    public function filter()
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_providers');
    }

    public function loadmore_filter($service_providers_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        $this->db->where('service_providers_id <',$service_providers_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_providers');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_providers');
    }

    public function loadmore_category_filter($category_array,$service_providers_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('service_providers_id <',$service_providers_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_providers');
    }*/

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_providers');
    }
    
    public function loadmore_no_filter($service_providers_id)
    {
        $this->db->where('service_providers_id <',$service_providers_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('service_providers');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `service_providers` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$service_providers_id)
    {
        $query = "SELECT * FROM `service_providers` WHERE `service_providers_id` < ". $service_providers_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('service_providers_id',$id);
        return $this->db->get('service_providers');
    }

    public function user_service_providers_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('service_providers')->result_array();
    }

    public function user_favourite_service_providers_detail($user_id, $post_ids){
        $this->db->where_in('service_providers_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('service_providers')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('service_providers_id',$id);
        return $this->db->delete('service_providers');
    }
}