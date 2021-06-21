<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TicketsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_tickets($imgpath)
    {
        $dataTickets = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'category' => $this->input->post('tickets-category'),
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
        return $this->db->insert('tickets', $dataTickets);
    }

    public function edit_tickets($imgpath)
    {
        $dataTickets = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'category' => $this->input->post('tickets-category'),
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
        
        $this->db->where('tickets_id',$this->input->post('tickets_id'));
        return $this->db->update('tickets', $dataTickets);
    }

    public function filter($date_array)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);

        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    public function loadmore_filter($date_array,$tickets_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);

        $this->db->where('date >= CURDATE()');
        $this->db->where('tickets_id <',$tickets_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    public function loadmore_category_filter($category_array,$tickets_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('tickets_id <',$tickets_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }
    
    public function date_filter($date_array)
    {
        $this->db->where_in('date',$date_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    public function loadmore_date_filter($date_array,$tickets_id)
    {
        $this->db->where_in('date',$date_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('tickets_id <',$tickets_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }
  
    public function category_date_filter($category_array,$date_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    public function loadmore_category_date_filter($category_array,$date_array,$tickets_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->where('tickets_id <',$tickets_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    public function currency_filter()
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }
    public function loadmore_currency_filter($tickets_id)
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('tickets_id <',$tickets_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }*/

    public function no_filter()
    {
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }
    
    public function loadmore_no_filter($tickets_id)
    {
        $this->db->where('date >= CURDATE()');
        $this->db->where('tickets_id <',$tickets_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('tickets');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `tickets` WHERE `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$tickets_id)
    {
        $query = "SELECT * FROM `tickets` WHERE `tickets_id` < ". $tickets_id ." AND `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('tickets_id',$id);
        return $this->db->get('tickets');
    }

    public function user_tickets_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('tickets')->result_array();
    }

    public function user_favourite_tickets_detail($user_id, $post_ids){
        $this->db->where_in('tickets_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('tickets')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('tickets_id',$id);
        return $this->db->delete('tickets');
    }
}