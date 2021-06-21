<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ShortTermHiringModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_short_term_hiring($imgpath)
    {
        $dataShortTermHiring = array(
			'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'expected_hours' => $this->input->post('expected-hours'),
            'category' => $this->input->post('short-term-hiring-category'),
            'work_details' => $this->input->post('work-details'),
            'address' => $this->input->post('address'),
            'pay' => $this->input->post('pay'),
            'pay_duration' => $this->input->post('pay-duration'),
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
        return $this->db->insert('short_term_hiring', $dataShortTermHiring);
    }

    public function edit_short_term_hiring($imgpath)
    {
        $dataShortTermHiring = array(
            'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'expected_hours' => $this->input->post('expected-hours'),
            'category' => $this->input->post('short-term-hiring-category'),
            'work_details' => $this->input->post('work-details'),
            'address' => $this->input->post('address'),
            'pay' => $this->input->post('pay'),
            'pay_duration' => $this->input->post('pay-duration'),
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
        
        $this->db->where('short_term_hiring_id',$this->input->post('short_term_hiring_id'));
        return $this->db->update('short_term_hiring', $dataShortTermHiring);
    }
    
    public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('short_term_hiring');
    }

    public function loadmore_category_filter($category_array,$short_term_hiring_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('short_term_hiring_id <',$short_term_hiring_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('short_term_hiring');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('short_term_hiring');
    }
    
    public function loadmore_no_filter($short_term_hiring_id)
    {
        $this->db->where('short_term_hiring_id <',$short_term_hiring_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('short_term_hiring');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `short_term_hiring` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$short_term_hiring_id)
    {
        $query = "SELECT * FROM `short_term_hiring` WHERE `short_term_hiring_id` < ". $short_term_hiring_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('short_term_hiring_id',$id);
        return $this->db->get('short_term_hiring');
    }

    public function user_short_term_hiring_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('short_term_hiring')->result_array();
    }

    public function user_favourite_short_term_hiring_detail($user_id, $post_ids){
        $this->db->where_in('short_term_hiring_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('short_term_hiring')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('short_term_hiring_id',$id);
        return $this->db->delete('short_term_hiring');
    }

}
