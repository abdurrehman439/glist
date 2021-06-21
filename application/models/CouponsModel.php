<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CouponsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_coupons($imgpath)
    {
        $dataCoupons = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'country' => $this->input->post('hire-a-resource-country'),
            'start_date' => date( 'Y-m-d' , strtotime($this->input->post('start-date')) ),
            'finish_date' => date( 'Y-m-d' , strtotime($this->input->post('finish-date')) ),
            'category' => $this->input->post('coupons-category'),
            'original_price' => $this->input->post('original-price'),
            'discounted_price' => $this->input->post('discounted-price'),
            'currency' => $this->input->post('currency'),
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
        return $this->db->insert('coupons', $dataCoupons);
    }

    public function edit_coupons($imgpath)
    {
        $dataCoupons = array(
            'title' => $this->input->post('title'),
            'business_name' => $this->input->post('business-name'),
            'tags' => $this->input->post('tags'),
            'start_date' => date( 'Y-m-d' , strtotime($this->input->post('start-date')) ),
            'finish_date' => date( 'Y-m-d' , strtotime($this->input->post('finish-date')) ),
            'category' => $this->input->post('coupons-category'),
            'original_price' => $this->input->post('original-price'),
            'discounted_price' => $this->input->post('discounted-price'),
            'currency' => $this->input->post('currency'),
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

        
        $this->db->where('coupons_id',$this->input->post('coupons_id'));
        return $this->db->update('coupons', $dataCoupons);
    }

    public function filter()
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->where('start_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }

    public function loadmore_filter($coupons_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->where('start_date >= CURDATE()');
        $this->db->where('coupons_id <',$coupons_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('start_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }

    public function loadmore_category_filter($category_array,$coupons_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('start_date >= CURDATE()');
        $this->db->where('coupons_id <',$coupons_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }

    public function currency_filter()
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('start_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }
    public function loadmore_currency_filter($coupons_id)
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('start_date >= CURDATE()');
        $this->db->where('coupons_id <',$coupons_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }*/

    public function no_filter()
    {
        $this->db->where('start_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }
    
    public function loadmore_no_filter($coupons_id)
    {
        $this->db->where('start_date >= CURDATE()');
        $this->db->where('coupons_id <',$coupons_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('coupons');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `coupons` WHERE `start_date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$coupons_id)
    {
        $query = "SELECT * FROM `coupons` WHERE `coupons_id` < ". $coupons_id ." AND `start_date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('coupons_id',$id);
        return $this->db->get('coupons');
    }

    public function user_coupons_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('coupons')->result_array();
    }

    public function user_favourite_coupons_detail($user_id, $post_ids){
        $this->db->where_in('coupons_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('coupons')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('coupons_id',$id);
        return $this->db->delete('coupons');
    }
}