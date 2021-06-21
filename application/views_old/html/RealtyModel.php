<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RealtyModel extends CI_Model{

    public function __construct()
   	{
        $this->load->library('session');
		$this->load->database();
    }

    public function insert_realty($imgpath)
    {
        $dataRealty = array(
			'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('realty-category'),
            'type' => $this->input->post('realty-type'),
            'price' => $this->input->post('price'),
            'currency' => $this->input->post('currency'),
            'details' => $this->input->post('details'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'bed' => $this->input->post('realty-bed'),
            'bath' => $this->input->post('realty-bath'),
            'lot' => $this->input->post('realty-lot'),
            'sewerage' => $this->input->post('realty-sewerage'),
            'water' => $this->input->post('realty-water'),
            'gas' => $this->input->post('realty-gas'),
            'tax' => $this->input->post('realty-tax'),
            'mls' => $this->input->post('realty-mls'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id'),
            'created_at' => date('Y-m-d H:i:s')
		);

		if( $this->input->post('openhouse-date') != "" ){
			$dataRealty['openhouse_date'] = date( 'Y-m-d' , strtotime($this->input->post('openhouse-date')) );
		}

        return $this->db->insert('realty', $dataRealty);
    }

    public function edit_realty($imgpath)
    {
        $dataRealty = array(
            'open_hour' => $this->input->post('open-hour'),
            'close_hour' => $this->input->post('close-hour'),
            'category' => $this->input->post('realty-category'),
            'type' => $this->input->post('realty-type'),
            'price' => $this->input->post('price'),
            'currency' => $this->input->post('currency'),
            'details' => $this->input->post('details'),
            'zipcode' => $this->input->post('zipcode'),
            'contact_name' => $this->input->post('contact-name'),
            'contact_number' => $this->input->post('contact-number'),
            'contact_email' => $this->input->post('contact-email'),
            'contact_website' => $this->input->post('contact-website'),
            'profile' => $this->input->post('profile-privacy'),
            'bed' => $this->input->post('realty-bed'),
            'bath' => $this->input->post('realty-bath'),
            'lot' => $this->input->post('realty-lot'),
            'sewerage' => $this->input->post('realty-sewerage'),
            'water' => $this->input->post('realty-water'),
            'gas' => $this->input->post('realty-gas'),
            'tax' => $this->input->post('realty-tax'),
            'mls' => $this->input->post('realty-mls'),
            'file' => $imgpath,
            'user_id' => $this->session->userdata('user_id')
        );
		
		if( $this->input->post('openhouse-date') != "" ){
			$dataRealty['openhouse_date'] = date( 'Y-m-d' , strtotime($this->input->post('openhouse-date')) );
		}
		else{
			$dataRealty['openhouse_date'] = null;
		}

        $this->db->where('realty_id',$this->input->post('realty_id'));
        return $this->db->update('realty', $dataRealty);
    }

    public function filter($date_array)
    {
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('type')) > 0 )
            $this->db->where_in('type',$this->input->post('type'));

        if( sizeof($date_array) > 0 )
            $this->db->where_in('openhouse_date',$date_array);
        

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        //$this->db->where('openhouse_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }
    
    public function loadmore_filter($date_array,$realty_id)
    {
        if( sizeof($this->input->post('currency')) > 0 )
            $this->db->where_in('currency',$this->input->post('currency'));

        if( sizeof($this->input->post('category')) > 0 )
            $this->db->where_in('category',$this->input->post('category'));

        if( sizeof($this->input->post('type')) > 0 )
            $this->db->where_in('type',$this->input->post('type'));

        if( sizeof($date_array) > 0 )
            $this->db->where_in('openhouse_date',$date_array);
        

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->where('realty_id <',$realty_id);
        
        //$this->db->where('openhouse_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }

    /*public function category_filter($category_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('openhouse_date >= CURDATE()');

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }

    public function loadmore_category_filter($category_array,$realty_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('openhouse_date >= CURDATE()');
        $this->db->where('realty_id <',$realty_id);

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }
    
    public function date_filter($date_array)
    {
        $this->db->where_in('openhouse_date',$date_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('openhouse_date >= CURDATE()');

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }

    public function loadmore_date_filter($date_array,$realty_id)
    {
        $this->db->where_in('openhouse_date',$date_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('openhouse_date >= CURDATE()');
        $this->db->where('realty_id <',$realty_id);

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }
  
    public function category_date_filter($category_array,$date_array)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('openhouse_date',$date_array);
        $this->db->where('openhouse_date >= CURDATE()');

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }

    public function loadmore_category_date_filter($category_array,$date_array,$realty_id)
    {
        $this->db->where_in('category',$category_array);
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where_in('openhouse_date',$date_array);
        $this->db->where('openhouse_date >= CURDATE()');
        $this->db->where('realty_id <',$realty_id);

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }

    public function currency_filter()
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('openhouse_date >= CURDATE()');

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }
    public function loadmore_currency_filter($realty_id)
    {
        $this->db->where('currency',$this->input->post('currency'));
        $this->db->where('openhouse_date >= CURDATE()');
        $this->db->where('realty_id <',$realty_id);

        $this->db->where('price >= ',$this->input->post('min-price'));
        $this->db->where('price <= ',$this->input->post('max-price'));
        $this->db->where('bed >= ',$this->input->post('bed'));
        $this->db->where('bath >= ',$this->input->post('bath'));

        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }*/

    public function no_filter()
    {
        //$this->db->where('openhouse_date >= CURDATE()');
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }
    
    public function loadmore_no_filter($realty_id)
    {
        //$this->db->where('openhouse_date >= CURDATE()');
        $this->db->where('realty_id <',$realty_id);
        $this->db->order_by('created_at','desc');
        $this->db->limit(1);
        return $this->db->get('realty');
    }

    /*public function search($keyword)
    {
        $query = "SELECT * FROM `realty` WHERE `openhouse_date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }

    public function loadmore_search($keyword,$realty_id)
    {
        $query = "SELECT * FROM `realty` WHERE `realty_id` < ". $realty_id ." AND `openhouse_date` >= CURDATE() AND (`title` LIKE '%".$keyword."%') order by `created_at` desc limit 1";
        return $this->db->query($query);
    }*/

    public function post_details($id)
    {
        $this->db->where('realty_id',$id);
        return $this->db->get('realty');
    }

    public function user_realty_detail($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->order_by('created_at','desc');
        return $this->db->get('realty')->result_array();
    }

    public function user_favourite_realty_detail($user_id, $post_ids){
        $this->db->where_in('realty_id',$post_ids);
        $this->db->order_by('created_at','desc');
        return $this->db->get('realty')->result_array();
    }

    public function delete_post($id)
    {
        $this->db->where('realty_id',$id);
        return $this->db->delete('realty');
    }

}
