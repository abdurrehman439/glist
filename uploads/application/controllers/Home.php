<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 * 
	 * 
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('UserModel');
		
		if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not Logged In.....!");
            redirect("/");
        }
	}

	public function index()
	{
		$header = array();

		$header['menu'] = "home";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data = array();
		$data['sales'][] = $this->UserModel->get_sales_post_for_home();
		$data['garage_sales'][] = $this->UserModel->get_garage_sales_post_for_home();
		$data['service_providers'][] = $this->UserModel->get_service_providers_post_for_home();
		$data['service_require'][] = $this->UserModel->get_service_require_post_for_home();
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/index',$data);
		$this->load->view('includes/footer');
	}

	public function faq()
	{
		$header = array();
		
		$header['menu'] = "about";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/faq');
		$this->load->view('includes/footer');
	}
	
	public function pricing()
	{
		$header = array();
		
		$header['menu'] = "about";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/pricing');
		$this->load->view('includes/footer');
	}

	public function terms_and_conditions()
	{
		$header = array();
		
		$header['menu'] = "about";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/terms-and-conditions');
		$this->load->view('includes/footer');
	}
	
	public function privacy_policy()
	{
		$header = array();
		
		$header['menu'] = "about";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/privacy-policy');
		$this->load->view('includes/footer');
	}

	public function reviews()
	{
		$header = array();
		
		$header['menu'] = "reviews";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/reviews');
		$this->load->view('includes/footer');
	}

	public function blog()
	{
		$header = array();
		
		$header['menu'] = "blog";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/blog');
		$this->load->view('includes/footer');
	}

	public function contact()
	{
		$header = array();
		
		$header['menu'] = "contact";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/contact');
		$this->load->view('includes/footer');
	}

	public function how_it_works()
	{
		$header = array();
		
		$header['menu'] = "how-it-works";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/how-it-works');
		$this->load->view('includes/footer');
	}

	public function agent_listing()
	{
		$header = array();
		
		$header['menu'] = "professionals-listing";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals( 'agent' );

		foreach( $data['users_data'] as $row )
		{
			$count = 0;
			
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'events' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'garage_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'coupons' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'jobs' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_require' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_providers' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'realty' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'nearby_stores' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'attractions' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'hire_a_resource' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'tickets' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'store_closures' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'learnings' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'discards' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'restaurants' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'rent' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'funding' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'business_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'match_friends' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'short_term_hiring' );

			$data['users_listing'][] = $count;
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/agent-listing',$data);
		$this->load->view('includes/footer');
	}
	
	public function agent_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals_by_id( 'agent', $param1 );

		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Agent Listing details not found!');
			redirect('home/agent_listing');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/agent-detail',$data);
		$this->load->view('includes/footer');

	}

	public function freelancers()
	{
		$header = array();
		
		$header['menu'] = "professionals-listing";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals( 'freelancer' );

		foreach( $data['users_data'] as $row )
		{
			$count = 0;

			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'events' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'garage_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'coupons' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'jobs' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_require' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_providers' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'realty' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'nearby_stores' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'attractions' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'hire_a_resource' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'tickets' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'store_closures' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'learnings' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'discards' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'restaurants' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'rent' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'funding' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'business_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'match_friends' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'short_term_hiring' );

			$data['users_listing'][] = $count;
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/freelancers',$data);
		$this->load->view('includes/footer');
	}
	
	public function freelancer_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

	
		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals_by_id( 'freelancer', $param1 );

		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Freelancers details not found!');
			redirect('home/freelancers');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/freelancer-detail',$data);
		$this->load->view('includes/footer');
	
	}

	public function resume()
	{
		$header = array();
		
		$header['menu'] = "professionals-listing";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals( 'resume' );

		foreach( $data['users_data'] as $row )
		{
			$count = 0;

			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'events' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'garage_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'coupons' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'jobs' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_require' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_providers' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'realty' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'nearby_stores' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'attractions' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'hire_a_resource' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'tickets' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'store_closures' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'learnings' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'discards' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'restaurants' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'rent' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'funding' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'business_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'match_friends' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'short_term_hiring' );

			$data['users_listing'][] = $count;
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/resume',$data);
		$this->load->view('includes/footer');
	}

	public function resume_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}
			
		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals_by_id( 'resume', $param1 );
		
		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Resume details not found!');
			redirect('home/resume');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/resume-detail',$data);
		$this->load->view('includes/footer');
	
	}

	public function service_providers()
	{
		$header = array();
		
		$header['menu'] = "professionals-listing";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals( 'service-provider' );

		foreach( $data['users_data'] as $row )
		{
			$count = 0;

			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'events' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'garage_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'coupons' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'jobs' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_require' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_providers' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'realty' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'nearby_stores' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'attractions' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'hire_a_resource' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'tickets' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'store_closures' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'learnings' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'discards' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'restaurants' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'rent' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'funding' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'business_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'match_friends' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'short_term_hiring' );

			$data['users_listing'][] = $count;
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/service-providers',$data);
		$this->load->view('includes/footer');
	}

	public function service_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals_by_id( 'service-provider', $param1 );

		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Service Providers details not found!');
			redirect('home/service_providers');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/service-detail',$data);
		$this->load->view('includes/footer');
	
	}

	public function guest_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professional_by_id( 'guest', $param1 );

		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Guest details not found!');
			redirect('home/service_providers');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/guest-detail',$data);
		$this->load->view('includes/footer');
	
	}



	public function entrepreneurs()
	{
		$header = array();
		
		$header['menu'] = "professionals-listing";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals( 'entrepreneur' );

		foreach( $data['users_data'] as $row )
		{
			$count = 0;

			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'events' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'garage_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'coupons' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'jobs' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_require' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_providers' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'realty' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'nearby_stores' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'attractions' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'hire_a_resource' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'tickets' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'store_closures' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'learnings' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'discards' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'restaurants' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'rent' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'funding' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'business_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'match_friends' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'short_term_hiring' );

			$data['users_listing'][] = $count;
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/entrepreneurs',$data);
		$this->load->view('includes/footer');
	}

	public function entrepreneur_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}
			
		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals_by_id( 'entrepreneur', $param1 );
		
		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Entrepreneur details not found!');
			redirect('home/entrepreneurs');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/entrepreneur-detail',$data);
		$this->load->view('includes/footer');
	
	}



	public function investors()
	{
		$header = array();
		
		$header['menu'] = "professionals-listing";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals( 'investor' );

		foreach( $data['users_data'] as $row )
		{
			$count = 0;

			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'events' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'garage_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'coupons' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'jobs' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_require' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'service_providers' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'realty' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'nearby_stores' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'attractions' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'hire_a_resource' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'tickets' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'store_closures' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'learnings' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'discards' );
			//$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'restaurants' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'rent' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'funding' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'business_sales' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'match_friends' );
			$count += $this->UserModel->fetch_count_professional_listings( $row['user_id'], 'short_term_hiring' );

			$data['users_listing'][] = $count;
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/investors',$data);
		$this->load->view('includes/footer');
	}

	public function investor_detail($param1 = "")
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}
			
		$data['users_listing'] = array(); 
		$data['users_data'] = $this->UserModel->fetch_professionals_by_id( 'investor', $param1 );
		
		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested Investor details not found!');
			redirect('home/investors');
		}

		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'events' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'garage_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'coupons' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'jobs' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_require' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'service_providers' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'realty' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'nearby_stores' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'attractions' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'hire_a_resource' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'tickets' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'store_closures' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'learnings' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'discards' );
		//$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'restaurants' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'rent' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'funding' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'business_sales' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'match_friends' );
		$data['users_listing'][] = $this->UserModel->fetch_professional_listings( $param1, 'short_term_hiring' );
		
		$this->load->view('includes/header',$header);
		$this->load->view('html/investor-detail',$data);
		$this->load->view('includes/footer');
	
	}



	public function user_detail($param1 = ""){
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$data['users_data'] = $this->UserModel->professional_user_detail( $param1 );
		$data['users_profile_data'] = $this->UserModel->professional_user_profile_detail( $param1 );

		if( sizeof($data['users_data']) == 0 )
		{
			$this->session->set_flashdata('error_message', 'The requested user details not found!');
			redirect('home');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/user-detail',$data);
		$this->load->view('includes/footer');
	}

	public function profile()
	{
		$header = array();
		
		$header['menu'] = "user";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/profile');
		$this->load->view('includes/footer');
	}

	public function listing_detail()
	{
		$header = array();
		
		$header['menu'] = "";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/listing-detail');
		$this->load->view('includes/footer');
	}
	
	public function tab_page()
	{
		$header = array();
		
		$header['menu'] = "browse";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/tab-page');
		$this->load->view('includes/footer');
	}

	public function app()
	{
		$this->load->view('html/app');
	}
	
	public function invite_a_friend()
	{
		$this->load->view('invite/invite-a-friend');
	}
	
	public function send_invite_a_friend()
	{
		$message =  '<!DOCTYPE html>
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    <!--<meta name="format-detection" content="telephone=no" /> --><!-- disable auto telephone linking in iOS -->
                    <title>Glokallist</title>
                    <style type="text/css">
                        /* RESET STYLES */
                        html { background-color:#E1E1E1; margin:0; padding:0; }
                        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
                        table{border-collapse:collapse;}
                        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
                        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
                        a {text-decoration:none !important;border-bottom: 1px solid;}
                        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}
                        /* CLIENT-SPECIFIC STYLES */
                        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
                        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
                        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
                        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
                        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
                        .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */
                        /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */
                        /* ========== Page Styles ========== */
                        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
                        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
                        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
                        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
                        .flexibleImage{height:auto;}
                        .linkRemoveBorder{border-bottom:0 !important;}
                        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}
                        body, #bodyTable{background-color:#E1E1E1;}
                        #emailHeader{background-color:#E1E1E1;}
                        #emailBody{background-color:#FFFFFF;}
                        #emailFooter{background-color:#E1E1E1;}
                        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
                        .emailButton{background-color:#205478; border-collapse:separate;}
                        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
                        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
                        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
                        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
                        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
                        .imageContentText {margin-top: 10px;line-height:0;}
                        .imageContentText a {line-height:0;}
                        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */
                        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
                        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
                        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}

                        .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
                        .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}
                        /* MOBILE STYLES */
                        @media only screen and (max-width: 480px){
                            /*////// CLIENT-SPECIFIC STYLES //////*/
                            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
                            /* FRAMEWORK STYLES */
                            /*
                            CSS selectors are written in attribute
                            selector format to prevent Yahoo Mail
                            from rendering media query styles on
                            desktop.
                            */
                            /*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
                            table[id="emailHeader"],
                            table[id="emailBody"],
                            table[id="emailFooter"],
                            table[class="flexibleContainer"],
                            td[class="flexibleContainerCell"] {width:100% !important;}
                            td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}

                            td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
                            img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
                            img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}
                            /*
                            Create top space for every second element in a block
                            */
                            table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}
                            /*
                            Make buttons in the email span the
                            full width of their container, allowing
                            for left- or right-handed ease of use.
                            */
                            table[class="emailButton"]{width:100% !important;}
                            td[class="buttonContent"]{padding:0 !important;}
                            td[class="buttonContent"] a{padding:15px !important;}
                        }
                        @media only screen and (-webkit-device-pixel-ratio:.75){
                            /* Put CSS for low density (ldpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1){
                            /* Put CSS for medium density (mdpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1.5){
                            /* Put CSS for high density (hdpi) Android layouts in here */
                        }
                        /* end Android targeting */
                        /* CONDITIONS FOR IOS DEVICES ONLY
                        =====================================================*/
                        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {
                        }
                        /* end IOS targeting */
                    </style>
                </head>
                <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
                    <center style="background-color:#E1E1E1;">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
                            <tr>
                                <td align="center" valign="top" id="bodyCell">
                                    <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" width="500" class="flexibleContainerCell">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                    
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top" class="textContent">
                                                                                    <h1 style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;">Glokallist</h1>
                                                                                    <img style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;" src="http://glokallist.com/assets/images/logo.png" />
                                                                                    <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">New Message</h2>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Name : </b>'.$_POST['sender_name'].'</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Email : </b>'.$_POST['sender_email'].'</h5><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Subject : </b>You are invited to join glokallist.com. Check now.</h5><br/>
                                                                                                <div mc:edit="body" style="text-align: justify;text-justify: inter-word;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;"><b>Message : </b>'. $_POST['message'] . '</div><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Thanks & Regards</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Team Glokallist.com</b></h5>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2018</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </center>
                </body>
			</html>';
			
		$this->load->library('email');
	
		$config = array();
		$config['mailtype'] = 'html';
		$config['charset']  = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['crlf'] = '\r\n';
		$config['newline'] = '\r\n';
		
		$this->email->initialize($config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('support@glokallist.com', "Glokallist"); // change it to yours
		$this->email->to($_POST['receiver_email']);// change it to yours
		$this->email->subject('You have a new message');
		$this->email->message($message);
		
		if($this->email->send())
		{
			$this->session->set_flashdata("success_message", "Success");
			redirect( base_url() . 'home/invite_a_friend' );
		}
		else
		{
			$this->session->set_flashdata("error_message", "Error");
			redirect( base_url() . 'home/invite_a_friend' );
		}
	}
	
	public function partner_with_us()
	{
		$this->load->view('invite/partner-with-us');
	}

	public function send_partner_with_us()
	{
		$message =  '<!DOCTYPE html>
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    <!--<meta name="format-detection" content="telephone=no" /> --><!-- disable auto telephone linking in iOS -->
                    <title>Glokallist</title>
                    <style type="text/css">
                        /* RESET STYLES */
                        html { background-color:#E1E1E1; margin:0; padding:0; }
                        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
                        table{border-collapse:collapse;}
                        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
                        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
                        a {text-decoration:none !important;border-bottom: 1px solid;}
                        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}
                        /* CLIENT-SPECIFIC STYLES */
                        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
                        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
                        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
                        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
                        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
                        .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */
                        /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */
                        /* ========== Page Styles ========== */
                        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
                        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
                        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
                        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
                        .flexibleImage{height:auto;}
                        .linkRemoveBorder{border-bottom:0 !important;}
                        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}
                        body, #bodyTable{background-color:#E1E1E1;}
                        #emailHeader{background-color:#E1E1E1;}
                        #emailBody{background-color:#FFFFFF;}
                        #emailFooter{background-color:#E1E1E1;}
                        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
                        .emailButton{background-color:#205478; border-collapse:separate;}
                        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
                        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
                        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
                        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
                        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
                        .imageContentText {margin-top: 10px;line-height:0;}
                        .imageContentText a {line-height:0;}
                        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */
                        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
                        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
                        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}

                        .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
                        .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}
                        /* MOBILE STYLES */
                        @media only screen and (max-width: 480px){
                            /*////// CLIENT-SPECIFIC STYLES //////*/
                            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
                            /* FRAMEWORK STYLES */
                            /*
                            CSS selectors are written in attribute
                            selector format to prevent Yahoo Mail
                            from rendering media query styles on
                            desktop.
                            */
                            /*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
                            table[id="emailHeader"],
                            table[id="emailBody"],
                            table[id="emailFooter"],
                            table[class="flexibleContainer"],
                            td[class="flexibleContainerCell"] {width:100% !important;}
                            td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}

                            td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
                            img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
                            img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}
                            /*
                            Create top space for every second element in a block
                            */
                            table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}
                            /*
                            Make buttons in the email span the
                            full width of their container, allowing
                            for left- or right-handed ease of use.
                            */
                            table[class="emailButton"]{width:100% !important;}
                            td[class="buttonContent"]{padding:0 !important;}
                            td[class="buttonContent"] a{padding:15px !important;}
                        }
                        @media only screen and (-webkit-device-pixel-ratio:.75){
                            /* Put CSS for low density (ldpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1){
                            /* Put CSS for medium density (mdpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1.5){
                            /* Put CSS for high density (hdpi) Android layouts in here */
                        }
                        /* end Android targeting */
                        /* CONDITIONS FOR IOS DEVICES ONLY
                        =====================================================*/
                        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {
                        }
                        /* end IOS targeting */
                    </style>
                </head>
                <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
                    <center style="background-color:#E1E1E1;">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
                            <tr>
                                <td align="center" valign="top" id="bodyCell">
                                    <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" width="500" class="flexibleContainerCell">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                    
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top" class="textContent">
                                                                                    <h1 style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;">Glokallist</h1>
                                                                                    <img style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;" src="http://glokallist.com/assets/images/logo.png" />
                                                                                    <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">New Message</h2>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Name : </b>'.$_POST['sender_name'].'</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Email : </b>'.$_POST['sender_email'].'</h5><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Subject : </b>Partner request</h5><br/>
                                                                                                <div mc:edit="body" style="text-align: justify;text-justify: inter-word;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;"><b>Message : </b>'. $_POST['message'] . '</div><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Thanks & Regards</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Team Glokallist.com</b></h5>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2018</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </center>
                </body>
			</html>';
			
		$this->load->library('email');
	
		$config = array();
		$config['mailtype'] = 'html';
		$config['charset']  = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['crlf'] = '\r\n';
		$config['newline'] = '\r\n';
		
		$this->email->initialize($config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('support@glokallist.com', "Glokallist"); // change it to yours
		$this->email->to('glokallist@gmail.com');// change it to yours
		$this->email->subject('You have a new message');
		$this->email->message($message);
		
		if($this->email->send())
		{
			$this->session->set_flashdata("success_message", "Success");
			redirect( base_url() . 'home/partner_with_us' );
		}
		else
		{
			$this->session->set_flashdata("error_message", "Error");
			redirect( base_url() . 'home/partner_with_us' );
		}
	}
	
	public function send_message()
	{
		$message =  '<!DOCTYPE html>
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    <!--<meta name="format-detection" content="telephone=no" /> --><!-- disable auto telephone linking in iOS -->
                    <title>Glokallist</title>
                    <style type="text/css">
                        /* RESET STYLES */
                        html { background-color:#E1E1E1; margin:0; padding:0; }
                        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
                        table{border-collapse:collapse;}
                        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
                        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
                        a {text-decoration:none !important;border-bottom: 1px solid;}
                        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}
                        /* CLIENT-SPECIFIC STYLES */
                        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
                        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
                        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
                        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
                        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
                        .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */
                        /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */
                        /* ========== Page Styles ========== */
                        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
                        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
                        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
                        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
                        .flexibleImage{height:auto;}
                        .linkRemoveBorder{border-bottom:0 !important;}
                        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}
                        body, #bodyTable{background-color:#E1E1E1;}
                        #emailHeader{background-color:#E1E1E1;}
                        #emailBody{background-color:#FFFFFF;}
                        #emailFooter{background-color:#E1E1E1;}
                        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
                        .emailButton{background-color:#205478; border-collapse:separate;}
                        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
                        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
                        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
                        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
                        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
                        .imageContentText {margin-top: 10px;line-height:0;}
                        .imageContentText a {line-height:0;}
                        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */
                        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
                        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
                        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}

                        .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
                        .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}
                        /* MOBILE STYLES */
                        @media only screen and (max-width: 480px){
                            /*////// CLIENT-SPECIFIC STYLES //////*/
                            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
                            /* FRAMEWORK STYLES */
                            /*
                            CSS selectors are written in attribute
                            selector format to prevent Yahoo Mail
                            from rendering media query styles on
                            desktop.
                            */
                            /*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
                            table[id="emailHeader"],
                            table[id="emailBody"],
                            table[id="emailFooter"],
                            table[class="flexibleContainer"],
                            td[class="flexibleContainerCell"] {width:100% !important;}
                            td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}

                            td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
                            img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
                            img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}
                            /*
                            Create top space for every second element in a block
                            */
                            table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}
                            /*
                            Make buttons in the email span the
                            full width of their container, allowing
                            for left- or right-handed ease of use.
                            */
                            table[class="emailButton"]{width:100% !important;}
                            td[class="buttonContent"]{padding:0 !important;}
                            td[class="buttonContent"] a{padding:15px !important;}
                        }
                        @media only screen and (-webkit-device-pixel-ratio:.75){
                            /* Put CSS for low density (ldpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1){
                            /* Put CSS for medium density (mdpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1.5){
                            /* Put CSS for high density (hdpi) Android layouts in here */
                        }
                        /* end Android targeting */
                        /* CONDITIONS FOR IOS DEVICES ONLY
                        =====================================================*/
                        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {
                        }
                        /* end IOS targeting */
                    </style>
                </head>
                <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
                    <center style="background-color:#E1E1E1;">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
                            <tr>
                                <td align="center" valign="top" id="bodyCell">
                                    <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" width="500" class="flexibleContainerCell">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                    
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top" class="textContent">
                                                                                    <h1 style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;">Glokallist</h1>
                                                                                    <img style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;" src="http://glokallist.com/assets/images/logo.png" />
                                                                                    <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">New Message</h2>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Name : </b>'.$_POST['sender_name'].'</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Email : </b>'.$_POST['sender_email'].'</h5><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Subject : </b>'.$_POST['subject'].'</h5><br/>
                                                                                                <div mc:edit="body" style="text-align: justify;text-justify: inter-word;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;"><b>Message : </b>'. $_POST['message'] . '</div><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Thanks & Regards</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Team Glokallist.com</b></h5>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2018</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </center>
                </body>
			</html>';
		
		$this->load->library('email');
	
		$config = array();
		$config['mailtype'] = 'html';
		$config['charset']  = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['crlf'] = '\r\n';
		$config['newline'] = '\r\n';
		
		$this->email->initialize($config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('support@glokallist.com', "Glokallist"); // change it to yours
		$this->email->to($_POST['receiver_email']);// change it to yours
		$this->email->subject('You have a new message');
		$this->email->message($message);
		
		if($this->email->send())
		{
			$this->session->set_flashdata("success_message", "Message send successfully.");
			redirect( $_POST['url'] );
		}
		else
		{
			$this->session->set_flashdata("error_message", "Something occured while sendiing message.");
			redirect( $_POST['url'] );
		}
	}

	public function job_send_message()
	{
        $UploadPreferences = array(
            'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/jobs/") ,
            'allowed_types' => 'gif|jpg|png|jpeg|pdf|docx',
            'file_name' => $_FILES['files']['name'],
        );

        $this->load->library('upload',$UploadPreferences);

        $this->upload->initialize($UploadPreferences);
        $this->upload->do_upload('files');
        
		$message =  '<!DOCTYPE html>
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    <!--<meta name="format-detection" content="telephone=no" /> --><!-- disable auto telephone linking in iOS -->
                    <title>Glokallist</title>
                    <style type="text/css">
                        /* RESET STYLES */
                        html { background-color:#E1E1E1; margin:0; padding:0; }
                        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
                        table{border-collapse:collapse;}
                        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
                        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
                        a {text-decoration:none !important;border-bottom: 1px solid;}
                        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}
                        /* CLIENT-SPECIFIC STYLES */
                        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
                        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
                        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
                        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
                        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
                        .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */
                        /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */
                        /* ========== Page Styles ========== */
                        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
                        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
                        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
                        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
                        .flexibleImage{height:auto;}
                        .linkRemoveBorder{border-bottom:0 !important;}
                        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}
                        body, #bodyTable{background-color:#E1E1E1;}
                        #emailHeader{background-color:#E1E1E1;}
                        #emailBody{background-color:#FFFFFF;}
                        #emailFooter{background-color:#E1E1E1;}
                        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
                        .emailButton{background-color:#205478; border-collapse:separate;}
                        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
                        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
                        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
                        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
                        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
                        .imageContentText {margin-top: 10px;line-height:0;}
                        .imageContentText a {line-height:0;}
                        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */
                        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
                        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
                        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}

                        .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
                        .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}
                        /* MOBILE STYLES */
                        @media only screen and (max-width: 480px){
                            /*////// CLIENT-SPECIFIC STYLES //////*/
                            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
                            /* FRAMEWORK STYLES */
                            /*
                            CSS selectors are written in attribute
                            selector format to prevent Yahoo Mail
                            from rendering media query styles on
                            desktop.
                            */
                            /*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
                            table[id="emailHeader"],
                            table[id="emailBody"],
                            table[id="emailFooter"],
                            table[class="flexibleContainer"],
                            td[class="flexibleContainerCell"] {width:100% !important;}
                            td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}

                            td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
                            img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
                            img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}
                            /*
                            Create top space for every second element in a block
                            */
                            table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}
                            /*
                            Make buttons in the email span the
                            full width of their container, allowing
                            for left- or right-handed ease of use.
                            */
                            table[class="emailButton"]{width:100% !important;}
                            td[class="buttonContent"]{padding:0 !important;}
                            td[class="buttonContent"] a{padding:15px !important;}
                        }
                        @media only screen and (-webkit-device-pixel-ratio:.75){
                            /* Put CSS for low density (ldpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1){
                            /* Put CSS for medium density (mdpi) Android layouts in here */
                        }
                        @media only screen and (-webkit-device-pixel-ratio:1.5){
                            /* Put CSS for high density (hdpi) Android layouts in here */
                        }
                        /* end Android targeting */
                        /* CONDITIONS FOR IOS DEVICES ONLY
                        =====================================================*/
                        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {
                        }
                        /* end IOS targeting */
                    </style>
                </head>
                <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
                    <center style="background-color:#E1E1E1;">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
                            <tr>
                                <td align="center" valign="top" id="bodyCell">
                                    <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" width="500" class="flexibleContainerCell">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                        <tr>
                                                                                            <td align="left" class="textContent">
                                                                                                <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                    
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <table bgcolor="#FFFFFF"  border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top" class="textContent">
                                                                                    <h1 style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;">Glokallist</h1>
                                                                                    <img style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;" src="http://glokallist.com/assets/images/logo.png" />
                                                                                    <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">New Message</h2>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Name : </b>'.$_POST['sender_name'].'</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Sender Email : </b>'.$_POST['sender_email'].'</h5><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Subject : </b>'.$_POST['subject'].'</h5><br/>
                                                                                                <div mc:edit="body" style="text-align: justify;text-justify: inter-word;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;"><b>Message : </b>'. $_POST['message'] . '</div><br/>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Thanks & Regards</h5>
                                                                                                <h5 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;"><b>Team Glokallist.com</b></h5>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                        <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td align="center" valign="top">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                        <tr>
                                                                                            <td valign="top" class="textContent">
                                                                                                <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2018</div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </center>
                </body>
			</html>';
		
		$this->load->library('email');
	
		$config = array();
		$config['mailtype'] = 'html';
		$config['charset']  = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['crlf'] = '\r\n';
		$config['newline'] = '\r\n';
		
		$this->email->initialize($config);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('support@glokallist.com', "Glokallist"); // change it to yours
		$this->email->to($_POST['receiver_email']);// change it to yours
		$this->email->subject('You have a new message');
		$this->email->message($message);
		$this->email->attach('./jobs/'.$_FILES['files']['name']);
		
		if($this->email->send())
		{
			$this->session->set_flashdata("success_message", "Message send successfully.");
			redirect( $_POST['url'] );
		}
		else
		{
			$this->session->set_flashdata("error_message", "Something occured while sendiing message.");
			redirect( $_POST['url'] );
		}
	}
}
