<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HireAResourceModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_hire_a_resource($imgpath)
    {
        $dataHireAResource = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'category' => $this->input->post('hire-a-resource-category'),
            'hourly_rate' => $this->input->post('hourly-rate'),
            'currency' => $this->input->post('currency'),
            'second_language' => $this->input->post('hire-a-resource-second-language'),
            'details' => $this->input->post('details'),
            'country' => $this->input->post('hire-a-resource-country'),
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
        return $this->db->insert('hire_a_resource', $dataHireAResource);
    }

    public function edit_hire_a_resource($imgpath)
    {
        $dataHireAResource = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'category' => $this->input->post('hire-a-resource-category'),
            'hourly_rate' => $this->input->post('hourly-rate'),
            'currency' => $this->input->post('currency'),
            'second_language' => $this->input->post('hire-a-resource-second-language'),
            'details' => $this->input->post('details'),
            'country' => $this->input->post('hire-a-resource-country'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('hire_a_resource_id',$this->input->post('hire_a_resource_id'));
        return $this->db->update('hire_a_resource', $dataHireAResource);
    }

    public function filter()
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($this->input->post('second_language')) > 0 )
            $this->db->where_in('second_language',$this->input->post('second_language'));

        if( sizeof($this->input->post('country')) > 0 )
            $this->db->where_in('country',$this->input->post('country'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }

    public function loadmore_filter($hire_a_resource_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($this->input->post('second_language')) > 0 )
            $this->db->where_in('second_language',$this->input->post('second_language'));

        if( sizeof($this->input->post('country')) > 0 )
            $this->db->where_in('country',$this->input->post('country'));

        $this->db->where('hire_a_resource_id <',$hire_a_resource_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }
    
    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }

    public function loadmore_category_filter($category_array,$hire_a_resource_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('hire_a_resource_id <',$hire_a_resource_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }

    public function currency_filter()
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }
    public function loadmore_currency_filter($hire_a_resource_id)
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('hire_a_resource_id <',$hire_a_resource_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }*/

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }
    
    public function loadmore_no_filter($hire_a_resource_id)
    {
        $this->db->where('hire_a_resource_id <',$hire_a_resource_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('hire_a_resource');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `hire_a_resource` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$hire_a_resource_id)
    {
        $query = "SELECT * FROM `hire_a_resource` WHERE `hire_a_resource_id` < ". $hire_a_resource_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('hire_a_resource_id',$id);
        return $this->db->get('hire_a_resource');
    }

    public function user_hire_a_resource_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('hire_a_resource')->result_array();
    }

    public function user_favourite_hire_a_resource_detail($user_id, $post_ids){
        $this->db->where_in('hire_a_resource_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('hire_a_resource')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('hire_a_resource_id',$id);
        return $this->db->delete('hire_a_resource');
    }

}