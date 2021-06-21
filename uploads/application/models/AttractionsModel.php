<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AttractionsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_attractions($imgpath)
    {
        $dataAttractions = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('attractions-category'),
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
        return $this->db->insert('attractions', $dataAttractions);
    }

    public function edit_attractions($imgpath)
    {
        $dataAttractions = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('attractions-category'),
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

        $this->db->where('attractions_id',$this->input->post('attractions_id'));
        return $this->db->update('attractions', $dataAttractions);
    }

    public function filter()
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('attractions');
    }

    public function loadmore_filter($attractions_id)
    {
        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        $this->db->where('attractions_id <',$attractions_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('attractions');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('attractions');
    }

    public function loadmore_category_filter($category_array,$attractions_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('attractions_id <',$attractions_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('attractions');
    }*/

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('attractions');
    }
    
    public function loadmore_no_filter($attractions_id)
    {
        $this->db->where('attractions_id <',$attractions_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('attractions');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `attractions` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$attractions_id)
    {
        $query = "SELECT * FROM `attractions` WHERE `attractions_id` < ". $attractions_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('attractions_id',$id);
        return $this->db->get('attractions');
    }

    public function user_attractions_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('attractions')->result_array();
    }

    public function user_favourite_attractions_detail($user_id, $post_ids){
        $this->db->where_in('attractions_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('attractions')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('attractions_id',$id);
        return $this->db->delete('attractions');
    }

}