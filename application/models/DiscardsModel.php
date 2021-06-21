<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DiscardsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_discards($imgpath)
    {
        $dataDiscards = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
            'details' => $this->input->post('details'),
            'country' => $this->input->post('hire-a-resource-country'),
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
        return $this->db->insert('discards', $dataDiscards);
    }

    public function edit_discards($imgpath)
    {
        $dataDiscards = array(
            'title' => $this->input->post('title'),
            'tags' => $this->input->post('tags'),
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

        $this->db->where('discards_id',$this->input->post('discards_id'));
        return $this->db->update('discards', $dataDiscards);
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('discards');
    }
    
    public function loadmore_no_filter($discards_id)
    {
        $this->db->where('discards_id <',$discards_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('discards');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `discards` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$discards_id)
    {
        $query = "SELECT * FROM `discards` WHERE `discards_id` < ". $discards_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('discards_id',$id);
        return $this->db->get('discards');
    }

    public function user_discards_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('discards')->result_array();
    }

    public function user_favourite_discards_detail($user_id, $post_ids){
        $this->db->where_in('discards_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('discards')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('discards_id',$id);
        return $this->db->delete('discards');
    }
}