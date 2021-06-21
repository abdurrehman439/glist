<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RentModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_rent($imgpath)
    {
        $dataRent = array(
			'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'country' => $this->input->post('hire-a-resource-country'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('rent-category'),
            'details' => $this->input->post('details'),
            'address' => $this->input->post('address'),
            'price' => $this->input->post('price'),
            'price_duration' => $this->input->post('price-duration'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
			'contact_website' => $this->input->post('contact-website'),
            'facebook' => $this->input->post('social-facebook'),
            'twitter' => $this->input->post('social-twitter'),
            'linkedin' => $this->input->post('social-linkedin'),
            'instagram' => $this->input->post('social-instagram'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id'),
            'created_at' => date('Y-m-d H:i:s')
        );
        return $this->db->insert('rent', $dataRent);
    }

    public function edit_rent($imgpath)
    {
        $dataRent = array(
            'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('rent-category'),
            'details' => $this->input->post('details'),
            'address' => $this->input->post('address'),
            'price' => $this->input->post('price'),
            'price_duration' => $this->input->post('price-duration'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
			'contact_website' => $this->input->post('contact-website'),
            'facebook' => $this->input->post('social-facebook'),
            'twitter' => $this->input->post('social-twitter'),
            'linkedin' => $this->input->post('social-linkedin'),
            'instagram' => $this->input->post('social-instagram'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->where('rent_id',$this->input->post('rent_id'));
        return $this->db->update('rent', $dataRent);
    }
    
    public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('rent');
    }

    public function loadmore_category_filter($category_array,$rent_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('rent_id <',$rent_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('rent');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('rent');
    }
    
    public function loadmore_no_filter($rent_id)
    {
        $this->db->where('rent_id <',$rent_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('rent');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `rent` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$rent_id)
    {
        $query = "SELECT * FROM `rent` WHERE `rent_id` < ". $rent_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('rent_id',$id);
        return $this->db->get('rent');
    }

    public function user_rent_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('rent')->result_array();
    }

    public function user_favourite_rent_detail($user_id, $post_ids){
        $this->db->where_in('rent_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('rent')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('rent_id',$id);
        return $this->db->delete('rent');
    }

}
