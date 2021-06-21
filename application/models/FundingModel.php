<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FundingModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_funding($imgpath)
    {
        $dataFunding = array(
			'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'country' => $this->input->post('hire-a-resource-country'),
            'amount' => $this->input->post('amount'),
			'details' => $this->input->post('details'),
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
        return $this->db->insert('funding', $dataFunding);
    }

    public function edit_funding($imgpath)
    {
        $dataFunding = array(
            'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'amount' => $this->input->post('amount'),
			'details' => $this->input->post('details'),
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
        
        $this->db->where('funding_id',$this->input->post('funding_id'));
        return $this->db->update('funding', $dataFunding);
    }
    
    public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('funding');
    }

    public function loadmore_category_filter($category_array,$funding_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('funding_id <',$funding_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('funding');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('funding');
    }
    
    public function loadmore_no_filter($funding_id)
    {
        $this->db->where('funding_id <',$funding_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('funding');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `funding` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$funding_id)
    {
        $query = "SELECT * FROM `funding` WHERE `funding_id` < ". $funding_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('funding_id',$id);
        return $this->db->get('funding');
    }

    public function user_funding_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('funding')->result_array();
    }

    public function user_favourite_funding_detail($user_id, $post_ids){
        $this->db->where_in('funding_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('funding')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('funding_id',$id);
        return $this->db->delete('funding');
    }

}
