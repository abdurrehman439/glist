<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ChatModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function last_chat_id()
    {
        $this->db->select_max('id');
        $result = $this->db->get('chat')->row_array();
        return $result['id'];
    }

    public function fetch_message($id)
    {
        $query = "SELECT users.user_name, profile_info.profile_picture, chat.message, chat.date_time, chat.zipcode, chat.user_id from users,chat,profile_info where chat.id = " . $id . " AND chat.user_id = users.user_id AND users.user_id = profile_info.user_id";
        $result = $this->db->query($query);

        return $result->row_array();
    }

    public function get_profile_picture($user_id){
        $this->db->where('user_id',$user_id);
        $result = $this->db->get('profile_info')->row_array();
        return $result['profile_picture'];
    }

}
