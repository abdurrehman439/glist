<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RestaurantsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_restaurants($imgpath)
    {
        $dataRestaurants = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('restaurants-category'),
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
        return $this->db->insert('restaurants', $dataRestaurants);
    }

    public function edit_restaurants($imgpath)
    {
        $dataRestaurants = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('restaurants-category'),
            'details' => $this->input->post('details'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('restaurants_id',$this->input->post('restaurants_id'));
        return $this->db->update('restaurants', $dataRestaurants);
    }
    
    public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('restaurants');
    }

    public function loadmore_category_filter($category_array,$restaurants_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('restaurants_id <',$restaurants_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('restaurants');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('restaurants');
    }
    
    public function loadmore_no_filter($restaurants_id)
    {
        $this->db->where('restaurants_id <',$restaurants_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('restaurants');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `restaurants` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$restaurants_id)
    {
        $query = "SELECT * FROM `restaurants` WHERE `restaurants_id` < ". $restaurants_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('restaurants_id',$id);
        return $this->db->get('restaurants');
    }

    public function user_restaurants_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('restaurants')->result_array();
    }

    public function user_favourite_restaurants_detail($user_id, $post_ids){
        $this->db->where_in('restaurants_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('restaurants')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('restaurants_id',$id);
        return $this->db->delete('restaurants');
    }

}
