<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EventsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_events($imgpath)
    {
        $dataEvents = array(
            'title' => $this->input->post('title'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'time_start' => $this->input->post('time-start'),
            'time_finish' => $this->input->post('time-finish'),
            'category' => $this->input->post('events-category'),
            'country' => $this->input->post('hire-a-resource-country'),
            'details' => $this->input->post('details'),
            'price' => $this->input->post('price'),
            'currency' => $this->input->post('currency'),
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
        return $this->db->insert('events', $dataEvents);
    }

    public function edit_events($imgpath)
    {
        $dataEvents = array(
            'title' => $this->input->post('title'),
            'date' => date( 'Y-m-d' , strtotime($this->input->post('date')) ),
            'time_start' => $this->input->post('time-start'),
            'time_finish' => $this->input->post('time-finish'),
            'category' => $this->input->post('events-category'),
            'details' => $this->input->post('details'),
            'price' => $this->input->post('price'),
            'currency' => $this->input->post('currency'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );

        $this->db->where('events_id',$this->input->post('events_id'));
        return $this->db->update('events', $dataEvents);
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
        return $this->db->get('events');
    }

    public function loadmore_filter($date_array,$events_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));
        
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));
        
        if( sizeof($date_array) > 0 )
            $this->db->where_in('date',$date_array);
        
        $this->db->where('date >= CURDATE()');
        $this->db->where('events_id <',$events_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }

    public function loadmore_category_filter($category_array,$events_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('events_id <',$events_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }
    
    public function date_filter($date_array)
    {
        $this->db->where_in('date',$date_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }

    public function loadmore_date_filter($date_array,$events_id)
    {
        $this->db->where_in('date',$date_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('events_id <',$events_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }
  
    public function category_date_filter($category_array,$date_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }

    public function loadmore_category_date_filter($category_array,$date_array,$events_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('date',$date_array);
        $this->db->where('date >= CURDATE()');
        $this->db->where('events_id <',$events_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }

    public function currency_filter()
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }
    public function loadmore_currency_filter($events_id)
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('date >= CURDATE()');
        $this->db->where('events_id <',$events_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }*/

    public function no_filter()
    {
        $this->db->where('date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }
    
    public function loadmore_no_filter($events_id)
    {
        $this->db->where('date >= CURDATE()');
        $this->db->where('events_id <',$events_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('events');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `events` WHERE `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$events_id)
    {
        $query = "SELECT * FROM `events` WHERE `events_id` < ". $events_id ." AND `date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('events_id',$id);
        return $this->db->get('events');
    }

    public function user_events_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('events')->result_array();
    }

    public function user_favourite_events_detail($user_id, $post_ids){
        $this->db->where_in('events_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('events')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('events_id',$id);
        return $this->db->delete('events');
    }

}