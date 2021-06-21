<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BusinessSalesModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_business_sales($imgpath)
    {
        $dataBusinessSales = array(
			'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'price' => $this->input->post('price'),
			'details' => $this->input->post('details'),
            'category' => $this->input->post('business-sales-category'),
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
        return $this->db->insert('business_sales', $dataBusinessSales);
    }

    public function edit_business_sales($imgpath)
    {
        $dataBusinessSales = array(
            'title' => $this->input->post('title'),
			'currency' => $this->input->post('currency'),
			'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'price' => $this->input->post('price'),
			'details' => $this->input->post('details'),
            'category' => $this->input->post('business-sales-category'),
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
        
        $this->db->where('business_sales_id',$this->input->post('business_sales_id'));
        return $this->db->update('business_sales', $dataBusinessSales);
    }
    
    public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('business_sales');
    }

    public function loadmore_category_filter($category_array,$business_sales_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('business_sales_id <',$business_sales_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('business_sales');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('business_sales');
    }
    
    public function loadmore_no_filter($business_sales_id)
    {
        $this->db->where('business_sales_id <',$business_sales_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('business_sales');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `business_sales` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$business_sales_id)
    {
        $query = "SELECT * FROM `business_sales` WHERE `business_sales_id` < ". $business_sales_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('business_sales_id',$id);
        return $this->db->get('business_sales');
    }

    public function user_business_sales_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('business_sales')->result_array();
    }

    public function user_favourite_business_sales_detail($user_id, $post_ids){
        $this->db->where_in('business_sales_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('business_sales')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('business_sales_id',$id);
        return $this->db->delete('business_sales');
    }

}
