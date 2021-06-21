<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MatchFriendsModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_match_friends($imgpath)
    {
        $dataMatchFriends = array(
			'title' => $this->input->post('title'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
            'about_yourself' => $this->input->post('about-yourself'),
            'country' => $this->input->post('hire-a-resource-country'),
			'occupation' => $this->input->post('occupation'),
			'religion' => $this->input->post('religion'),
			'height' => $this->input->post('height'),
			'ethnicity' => $this->input->post('ethnicity'),
			'body_type' => $this->input->post('body-type'),
			'education' => $this->input->post('education'),
			'ideal_match' => $this->input->post('ideal-match'),
			'relationship_history' => $this->input->post('relationship-history'),
			'lifestyle' => $this->input->post('lifestyle'),
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
        return $this->db->insert('match_friends', $dataMatchFriends);
    }

    public function edit_match_friends($imgpath)
    {
        $dataMatchFriends = array(
            'title' => $this->input->post('title'),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'about_yourself' => $this->input->post('about-yourself'),
			'occupation' => $this->input->post('occupation'),
			'religion' => $this->input->post('religion'),
			'height' => $this->input->post('height'),
			'ethnicity' => $this->input->post('ethnicity'),
			'body_type' => $this->input->post('body-type'),
			'education' => $this->input->post('education'),
			'ideal_match' => $this->input->post('ideal-match'),
			'relationship_history' => $this->input->post('relationship-history'),
			'lifestyle' => $this->input->post('lifestyle'),
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
        
        $this->db->where('match_friends_id',$this->input->post('match_friends_id'));
        return $this->db->update('match_friends', $dataMatchFriends);
    }
    
    public function gender_filter($gender_array,$age)
    {
		$this->db->where_in('gender',$gender_array);
		if($age != 0)
			$this->db->where('age =',$age);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('match_friends');
    }

    public function loadmore_gender_filter($gender_array,$age,$match_friends_id)
    {
        $this->db->where_in('gender',$gender_array);
		if($age != 0)
			$this->db->where('age =',$age);
        $this->db->where('match_friends_id <',$match_friends_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('match_friends');
	}
	
	public function age_filter($age)
    {
        $this->db->where('age =',$age);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('match_friends');
    }

    public function loadmore_age_filter($age,$match_friends_id)
    {
        $this->db->where('age =',$age);
        $this->db->where('match_friends_id <',$match_friends_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('match_friends');
    }

    public function no_filter()
    {
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('match_friends');
    }
    
    public function loadmore_no_filter($match_friends_id)
    {
        $this->db->where('match_friends_id <',$match_friends_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('match_friends');
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM `match_friends` WHERE (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$match_friends_id)
    {
        $query = "SELECT * FROM `match_friends` WHERE `match_friends_id` < ". $match_friends_id ." AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function post_details($id)
    {
        $this->db->where('match_friends_id',$id);
        return $this->db->get('match_friends');
    }

    public function user_match_friends_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('match_friends')->result_array();
    }

    public function user_favourite_match_friends_detail($user_id, $post_ids){
        $this->db->where_in('match_friends_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('match_friends')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('match_friends_id',$id);
        return $this->db->delete('match_friends');
    }

}
