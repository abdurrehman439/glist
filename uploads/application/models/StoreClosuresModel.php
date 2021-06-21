<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StoreClosuresModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_store_closures($imgpath)
    {
        $dataStoreClosures = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
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
        return $this->db->insert('store_closures', $dataStoreClosures);
    }

    public function edit_store_closures($imgpath)
    {
        $dataStoreClosures = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
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
        
        $this->db->where('store_closures_id',$this->input->post('store_closures_id'));
        return $this->db->update('store_closures', $dataStoreClosures);
    }
    
    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('store_closures');
    }

    public function loadmore_category_filter($category_array,$store_closures_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('store_closures_id <',$store_closures_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('store_closures');
    }*/

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('store_closures');
    }
    
    public function loadmore_no_filter($store_closures_id)
    {
        $this->db->where('store_closures_id <',$store_closures_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('store_closures');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `store_closures` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$store_closures_id)
    {
        $query = "SELECT * FROM `store_closures` WHERE `store_closures_id` < ". $store_closures_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('store_closures_id',$id);
        return $this->db->get('store_closures');
    }

    public function user_store_closures_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('store_closures')->result_array();
    }

    public function user_favourite_store_closures_detail($user_id, $post_ids){
        $this->db->where_in('store_closures_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('store_closures')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('store_closures_id',$id);
        return $this->db->delete('store_closures');
    }

}