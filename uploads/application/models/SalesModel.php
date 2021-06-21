<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SalesModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_sales($imgpath)
    {
        $dataSales = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'category' => $this->input->post('sales-category'),
            'price' => $this->input->post('price'),
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
        return $this->db->insert('sales', $dataSales);
    }

    public function edit_sales($imgpath)
    {
        $dataSales = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'category' => $this->input->post('sales-category'),
            'price' => $this->input->post('price'),
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

        $this->db->where('sales_id',$this->input->post('sales_id'));
        return $this->db->update('sales', $dataSales);
    }

    public function filter()
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
            
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('sales');
    }

    public function loadmore_filter($sales_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->where('sales_id <',$sales_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('sales');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('sales');
    }
    
    public function loadmore_no_filter($sales_id)
    {
        $this->db->where('sales_id <',$sales_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('sales');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `sales` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$sales_id)
    {
        $query = "SELECT * FROM `sales` WHERE `sales_id` < ". $sales_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('sales_id',$id);
        return $this->db->get('sales');
    }

    public function user_sales_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('sales')->result_array();
    }

    public function user_favourite_sales_detail($user_id, $post_ids){
        $this->db->where_in('sales_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('sales')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('sales_id',$id);
        return $this->db->delete('sales');
    }
}