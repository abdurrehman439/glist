<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GarageSalesModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_garage_sales($imgpath)
    {
        $dataGarageSales = array(
            'title' => $this->input->post('title'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'time_start' => $this->input->post('time-start'),
            'time_finish' => $this->input->post('time-finish'),
            'country' => $this->input->post('hire-a-resource-country'),
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
        return $this->db->insert('garage_sales', $dataGarageSales);
    }

    public function edit_garage_sales($imgpath)
    {
        $dataGarageSales = array(
            'title' => $this->input->post('title'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'time_start' => $this->input->post('time-start'),
            'time_finish' => $this->input->post('time-finish'),
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
        
        $this->db->where('garage_sales_id',$this->input->post('garage_sales_id'));
        return $this->db->update('garage_sales', $dataGarageSales);
    }

    public function filter($date_array)
    {
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);
        
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('garage_sales');
    }

    public function loadmore_filter($date_array,$garage_sales_id)
    {
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);
        
        $this->db->where('date >= CURDATE()');
        $this->db->where('garage_sales_id <',$garage_sales_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('garage_sales');
    }

    public function no_filter()
    {
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('garage_sales');
    }
    
    public function loadmore_no_filter($garage_sales_id)
    {
        $this->db->where('date >= CURDATE()');
        $this->db->where('garage_sales_id <',$garage_sales_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('garage_sales');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `garage_sales` WHERE `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$garage_sales_id)
    {
        $query = "SELECT * FROM `garage_sales` WHERE `garage_sales_id` < ". $garage_sales_id ." AND `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('garage_sales_id',$id);
        return $this->db->get('garage_sales');
    }

    public function user_garage_sales_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('garage_sales')->result_array();
    }

    public function user_favourite_garage_sales_detail($user_id, $post_ids){
        $this->db->where_in('garage_sales_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('garage_sales')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('garage_sales_id',$id);
        return $this->db->delete('garage_sales');
    }

}