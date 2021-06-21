<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NearbyStoresModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_nearby_stores($imgpath)
    {
        $dataNearbyStores = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'country' => $this->input->post('hire-a-resource-country'),
            'category' => $this->input->post('nearby-stores-category'),
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
        return $this->db->insert('nearby_stores', $dataNearbyStores);
    }

    public function edit_nearby_stores($imgpath)
    {
        $dataNearbyStores = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('nearby-stores-category'),
            'details' => $this->input->post('details'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('nearby_stores_id',$this->input->post('nearby_stores_id'));
        return $this->db->update('nearby_stores', $dataNearbyStores);
    }

    public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('nearby_stores');
    }

    public function loadmore_category_filter($category_array,$nearby_stores_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('nearby_stores_id <',$nearby_stores_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('nearby_stores');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('nearby_stores');
    }
    
    public function loadmore_no_filter($nearby_stores_id)
    {
        $this->db->where('nearby_stores_id <',$nearby_stores_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('nearby_stores');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `nearby_stores` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$nearby_stores_id)
    {
        $query = "SELECT * FROM `nearby_stores` WHERE `nearby_stores_id` < ". $nearby_stores_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('nearby_stores_id',$id);
        return $this->db->get('nearby_stores');
    }

    public function user_nearby_stores_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('nearby_stores')->result_array();
    }

    public function user_favourite_nearby_stores_detail($user_id, $post_ids){
        $this->db->where_in('nearby_stores_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('nearby_stores')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('nearby_stores_id',$id);
        return $this->db->delete('nearby_stores');
    }

}
