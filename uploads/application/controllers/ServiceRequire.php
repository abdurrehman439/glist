<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceRequire extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('ServiceRequireModel');
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->database();
		
		if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not Logged In.....!");
            redirect("/");
        }
	}
    
    public function index()
	{
		$header = array();
		
		$header['menu'] = "browse";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
        }
        
        $user = array();
        $user['zip_code'] = $this->session->userdata('zip_code');
        $user['range'] = $this->session->userdata('range');

		$this->load->view('includes/header',$header);
		$this->load->view('html/servicerequire-page',$user);
		$this->load->view('includes/footer');
    }

    public function insert(){

        $this->load->helper('security');
        
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('tags', 'Tags', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('service-require-category', 'Category', 'required');
        $this->form_validation->set_rules('job-description', 'Job description', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-name', 'Contact Name', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-number', 'Contact Number', 'required|numeric|greater_than[0]|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('contact-email', 'Contact Email', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-website', 'Contact Website', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('profile-privacy', 'Profile Privacy', 'required');
        $this->form_validation->set_rules('currency', 'Currency', 'required');

        if($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else if($this->input->post('discounted-price') > $this->input->post('original-price'))
        {
            echo json_encode( array('validation_errors' => "Discount Price should be less than Original Price.....!") );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/") ,
                'allowed_types' => 'gif|jpg|png',
                'file_name'=>$this->session->userdata('user_id')."_".time()."_servicerequire.jpg"
            );

            $path = array();
            $files = $_FILES;
            $number_of_files = count($_FILES['files']['name']);
            $this->load->library('upload',$UploadPreferences);
            
            for( $i=0; $i < $number_of_files - 1; $i++ )
            {
                $_FILES['files']['name']= $files['files']['name'][$i];
                $_FILES['files']['type']= $files['files']['type'][$i];
                $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
                $_FILES['files']['error']= $files['files']['error'][$i];
                $_FILES['files']['size']= $files['files']['size'][$i];    
        
                $this->upload->initialize($UploadPreferences);
                $this->upload->do_upload('files');
                
                $photoInfo = $this->upload->data();
                $path[]="uploads/".$this->session->userdata('user_name')."/".$photoInfo['file_name'];
            }
            
            $path = json_encode($path);

            $this->ServiceRequireModel->insert_service_require($path);

            $service_require_id = $this->ServiceRequireModel->get_current_service_require_id();
          
            $result = $this->ServiceRequireModel->get_service_providers_id($this->input->post("service-require-category"));
            
            $user_ids = array();
            for($i=0 ; $i < sizeof($result) ; $i++)
                $user_ids[] =  $result[$i]['user_id'];
            
			if( sizeof($user_ids) > 0 )
				$result = $this->ServiceRequireModel->get_service_providers($user_ids);
			else
				$result = array();
            
            for($i=0 ; $i < sizeof($result) ; $i++)
            {
                $message = '<!DOCTYPE html>
                    	<html>
                    	<head>
                    		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    		<!--<meta name="format-detection" content="telephone=no" /> --><!-- disable auto telephone linking in iOS -->
                    		<title>Respmail is a response HTML email designed to work on all major email platforms and smartphones</title>
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
                    																						Here is Contact Request from Mudarka
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
                    																		<h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">New Post</h2>
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
                    							<tr mc:hideable>
                    								<td align="center" valign="top">

                    									<table border="0" cellpadding="0" cellspacing="0" width="100%">
                    										<tr>
                    											<td align="center" valign="top">
                    												<table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
                    													<tr>
                    														<td valign="top" width="500" class="flexibleContainerCell">
                    															<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                    																<tr>
                    																	<td align="left" valign="top" class="flexibleContainerBox">
                    																		<table border="0" cellpadding="0" cellspacing="0" width="210" style="max-width: 100%;">
                    																			<tr>
                    																				<td align="left" class="textContent">
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
                    																					<h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Post Details</h3>
                    																					<div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">'. $this->input->post("job-description") .'</div>
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
                    									<table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 35px;">
                    										<tr style="padding-top:0;">
                    											<td align="center" valign="top">
                    												<table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
                    													<tr>
                    														<td style="padding-top:0;" align="center" valign="top" width="500" class="flexibleContainerCell">
                    															<table border="0" cellpadding="0" cellspacing="0" width="50%" class="emailButton" style="background-color: #3498DB;">
                    																<tr>
                    																	<td align="center" valign="middle" class="buttonContent" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;">
                    																		<a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;" href="'.base_url().'ServiceRequire/post_details/'.$service_require_id.'" target="_blank">View Post</a>
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
                    																					<div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2016</div>
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
                $this->email->to($result[$i]['email']);// change it to yours
                $this->email->subject('Service Require Post');
                $this->email->message($message);
                $this->email->send();
            }

            echo json_encode( array('success' => "Service Require Listing has been Added.....!") );
        }
	}
	
	public function edit(){

        $this->load->helper('security');
        
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('tags', 'Tags', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('service-require-category', 'Category', 'required');
        $this->form_validation->set_rules('job-description', 'Job description', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-name', 'Contact Name', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-number', 'Contact Number', 'required|numeric|greater_than[0]|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('contact-email', 'Contact Email', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('contact-website', 'Contact Website', 'required|min_length[3]|max_length[255]');
        $this->form_validation->set_rules('profile-privacy', 'Profile Privacy', 'required');
        $this->form_validation->set_rules('currency', 'Currency', 'required');

        if($this->form_validation->run() === FALSE)
        {
            echo json_encode( array('validation_errors' => validation_errors()) );
        }
        else if($this->input->post('discounted-price') > $this->input->post('original-price'))
        {
            echo json_encode( array('validation_errors' => "Discount Price should be less than Original Price.....!") );
        }
        else
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') .  "/uploads/". $this->session->userdata('user_name') . "/") ,
                'allowed_types' => 'gif|jpg|png',
                'file_name'=>$this->session->userdata('user_id')."_".time()."_servicerequire.jpg"
            );

            if( $this->input->post('previous-images') != null )
                $path = $this->input->post('previous-images');
            else
                $path = array();
            
            $files = $_FILES;
            $number_of_files = count($_FILES['files']['name']);
            $this->load->library('upload',$UploadPreferences);
            
            for( $i=0; $i < $number_of_files - 1; $i++ )
            {
                $_FILES['files']['name']= $files['files']['name'][$i];
                $_FILES['files']['type']= $files['files']['type'][$i];
                $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
                $_FILES['files']['error']= $files['files']['error'][$i];
                $_FILES['files']['size']= $files['files']['size'][$i];    
        
                $this->upload->initialize($UploadPreferences);
                $this->upload->do_upload('files');
                
                $photoInfo = $this->upload->data();
                $path[]="uploads/".$this->session->userdata('user_name')."/".$photoInfo['file_name'];
            }
            
            $path = json_encode($path);

            $this->ServiceRequireModel->edit_service_require($path);

            $service_require_id = $this->ServiceRequireModel->get_current_service_require_id();
          
            $result = $this->ServiceRequireModel->get_service_providers_id($this->input->post("service-require-category"));
            
            $user_ids = array();
            for($i=0 ; $i < sizeof($result) ; $i++)
                $user_ids[] =  $result[$i]['user_id'];
            
			if( sizeof($user_ids) > 0 )
				$result = $this->ServiceRequireModel->get_service_providers($user_ids);
			else
				$result = array();

            for($i=0 ; $i < sizeof($result) ; $i++)
            {
                $message = '<!DOCTYPE html>
                    	<html>
                    	<head>
                    		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    		<!--<meta name="format-detection" content="telephone=no" /> --><!-- disable auto telephone linking in iOS -->
                    		<title>Respmail is a response HTML email designed to work on all major email platforms and smartphones</title>
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
                    																						Here is Contact Request from Mudarka
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
                    																		<h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">New Post</h2>
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
                    							<tr mc:hideable>
                    								<td align="center" valign="top">

                    									<table border="0" cellpadding="0" cellspacing="0" width="100%">
                    										<tr>
                    											<td align="center" valign="top">
                    												<table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
                    													<tr>
                    														<td valign="top" width="500" class="flexibleContainerCell">
                    															<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                    																<tr>
                    																	<td align="left" valign="top" class="flexibleContainerBox">
                    																		<table border="0" cellpadding="0" cellspacing="0" width="210" style="max-width: 100%;">
                    																			<tr>
                    																				<td align="left" class="textContent">
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
                    																					<h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Post Details</h3>
                    																					<div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">'. $this->input->post("job-description") .'</div>
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
                    									<table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 35px;">
                    										<tr style="padding-top:0;">
                    											<td align="center" valign="top">
                    												<table border="0" cellpadding="30" cellspacing="0" width="500" class="flexibleContainer">
                    													<tr>
                    														<td style="padding-top:0;" align="center" valign="top" width="500" class="flexibleContainerCell">
                    															<table border="0" cellpadding="0" cellspacing="0" width="50%" class="emailButton" style="background-color: #3498DB;">
                    																<tr>
                    																	<td align="center" valign="middle" class="buttonContent" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;">
                    																		<a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;" href="'.base_url().'ServiceRequire/post_details/'.$service_require_id.'" target="_blank">View Post</a>
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
                    																					<div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2016</div>
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
                $this->email->from('support@glokallist.com', "Gamperella"); // change it to yours
                $this->email->to($result[$i]['email']);// change it to yours
                $this->email->subject('Service Require Post');
                $this->email->message($message);
                $this->email->send();
            }

            echo json_encode( array('success' => "Service Require Listing has been Edited.....!") );
        }
    }

    public function filters(){

		$date_array = array();
        for( $i = 0 ; $i < sizeof( $this->input->post('date') ) ; $i++)
			$date_array[] = date( 'Y-m-d' , strtotime($this->input->post('date')[$i]) );
			
        if( $this->input->post('index') == 0 ){
            $query = $this->ServiceRequireModel->filter($date_array);
        }
        else{
			$query = $this->ServiceRequireModel->loadmore_filter($date_array,$this->input->post('index'));
        }
        
        if(count($query->result()) == 0)
        {
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else
        {
            return print_r(json_encode($query->result()));
        }
    }
    
    public function no_filter()
    {   
        if( $this->input->post('index') == 0 ){
            $query = $this->ServiceRequireModel->no_filter();
        }
        else{
            $query = $this->ServiceRequireModel->loadmore_no_filter($this->input->post('index'));
        }
        
        if(count($query->result()) == 0)
        {
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else
        {
            return print_r(json_encode($query->result()));
        }
    }

    public function search()
    {  
        if( $this->input->post('index') == 0 ){
            $query = $this->ServiceRequireModel->search($this->input->post('keyword'));
        }
        else{
            $query = $this->ServiceRequireModel->loadmore_search($this->input->post('keyword'),$this->input->post('index'));
        }

        if(count($query->result()) == 0)
  		{
            return print_r(json_encode(array('result'=>"No results found")));
        }
        else
        {
            return print_r(json_encode($query->result()));
        }
    }

    public function zipcode()
    {  
        if($this->input->post('zipcode') == "" || $this->input->post('range') == "")
  		{
            return print_r(json_encode(array('result'=>"error1")));
        }
        else if($this->input->post('range') < 1)
        {
            return print_r(json_encode(array('result'=>"error2")));
        }
        else
        {
            $this->session->set_userdata('zip_code',$this->input->post('zipcode'));
            $this->session->set_userdata('range',$this->input->post('range'));
            return print_r(json_encode(array('result'=>"success")));
        }
    }

    public function post_details($id){
        
        $query = $this->ServiceRequireModel->post_details($id);

        $header = array();
        $header['menu'] = "";
        
        $data = array();
		$data['post'] = $query->result();
        
		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/servicerequire-details',$data);
		$this->load->view('includes/footer');
	}
	
	public function delete($id = '')
    {
        if($id == '')
        {
            $this->session->set_flashdata("error_message", "Bad Request!");
            redirect("user/my_listing");
        }
        else
        {
            $post = $this->ServiceRequireModel->post_details($id);
            $post = $post->result();
            
            if( sizeof( $post ) > 0 )
            {
                if($post[0]->user_id == $this->session->userdata('user_id'))
                {
                    $this->ServiceRequireModel->delete_post($id);
                    $this->session->set_flashdata("success_message", "Requested ServiceRequire post deleted successfully!");
                    redirect("user/my_listing");
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested ServiceRequire post doesn't belongs to you!");
                    redirect("user/my_listing");
                }
            }
            else
            {
                $this->session->set_flashdata("error_message", "Requested ServiceRequire post doesn't exists!");
                redirect("user/my_listing");
            }
        }
    }
}
