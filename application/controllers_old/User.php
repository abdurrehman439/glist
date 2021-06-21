<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        
        $this->load->model('EventsModel');
        $this->load->model('GarageSalesModel');
        $this->load->model('SalesModel');
        $this->load->model('CouponsModel');
        $this->load->model('JobsModel');
        $this->load->model('ServiceRequireModel');
        $this->load->model('ServiceProvidersModel');
        $this->load->model('RealtyModel');
        $this->load->model('NearbyStoresModel');
        $this->load->model('AttractionsModel');
        $this->load->model('HireAResourceModel');
        $this->load->model('TicketsModel');
        $this->load->model('StoreClosuresModel');
        $this->load->model('LearningsModel');
        $this->load->model('DiscardsModel');
        $this->load->model('RestaurantsModel');
        $this->load->model('RentModel');
        $this->load->model('FundingModel');
        $this->load->model('BusinessSalesModel');
        $this->load->model('ShortTermHiringModel');
        $this->load->model('MatchFriendsModel');

        $this->load->database();
    }
    
    function _remap($method, $param) 
    {   
        if($method == "register"):
            $this->register();
        elseif($method == "profile"):
            $this->profile();
        elseif ($method == "password_request"):
            if(!isset($param[0]) && !isset($param[1])):
                $param[0]='';
                $param[1]='';
            endif;
            $this->password_request($param[0],$param[1]);
        elseif($method == "forget_password"):
            $this->forget_password();
        elseif($method == "change_password"):
                $this->change_password();
        elseif($method == "sign_in"):
            $this->sign_in();
        elseif($method == "sign_out"):
            $this->sign_out();
        elseif($method == "resend_link"):
            if($param[0]):
                $this->resend_link($param[0]);
            endif;
        elseif($method == "update_profile"):
            $this->update_profile();
        elseif($method == "update_profileimage"):
            $this->update_profileimage();
        elseif($method == "update_password"):
            $this->update_password();
        elseif($method == "submit_listing"):
            $this->submit_listing();
        elseif($method == "my_listing"):
            $this->my_listing();
        elseif($method == "add_to_favourite"):
            $this->add_to_favourite();
        elseif($method == "remove_from_favourite"):
            $this->remove_from_favourite();
        elseif($method == "edit_submit_listing"):
            $this->edit_submit_listing($param[0],$param[1]);
        elseif($method == "approve_account"):
            $this->approve_account($param[0]);
        endif;
    }

    public function register()
    {

        if($this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are already logged in. Can't register right now.");
            redirect("/");
        }
    
        $this->load->helper('security');
        
        $this->form_validation->set_rules( 'full_name', 'Full Name', 'trim|required|alpha|min_length[3]|max_length[30]' );
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required|valid_email|is_unique[users.email]|max_length[50]', array('is_unique' => '%s is already taken.') );
		$this->form_validation->set_rules( 'user_name', 'User name', 'trim|is_unique[users.user_name]|required|min_length[3]|max_length[30]', array('is_unique' => '%s is already taken.') );
		$this->form_validation->set_rules( 'zipcode', 'City', 'trim|required|max_length[500]');
        $this->form_validation->set_rules( 'zipcode1', 'Zip Code', 'trim|max_length[500]');

		$this->form_validation->set_rules( 'password', 'Password', 'trim|required|min_length[6]|max_length[50]');

        $this->form_validation->run();
    
        $this->session->set_flashdata('errors', validation_errors());

	 	if ($this->form_validation->run() === FALSE)
		{
			redirect("/register");
        }
		else
		{
            if($this->input->post('password') != $this->input->post('confirm_password'))
            {
                $this->session->set_flashdata('error_message',"Password and Confirm Password don't match.");
                redirect('/register');
            }
            else
            {
                $id=$this->UserModel->insert_user_info();

                if($id):
                    
                    $dir  = realpath(APPPATH . '../') . '/uploads/' . $this->input->post("user_name") . '/';
                    if( !(file_exists($dir) && is_dir($dir)) ):
                        mkdir($dir, 0755, true);
                    endif;

                    $this->session->set_flashdata('success_message',"An activation link has been sent to your email, Please activate your account");
                else:
                    $this->session->set_flashdata('error_message',"Try Again");
                endif;

                redirect('/');
            }

		}
    }

    public function profile()
	{
        $header = array();
        $data = array();
        
        $header['menu'] = "user";

        if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not logged in. Can't visit profile.");
            redirect("/");
        }
        else{
            $data['user_id'] = $this->session->userdata('user_id');
            $header['user_id'] = $this->session->userdata('user_id');
        }

        $result = $this->UserModel->user_detail($this->session->userdata('user_id'));
        
        $data['full_name'] = $result->result_array()[0]['full_name'];
        $data['email'] = $result->result_array()[0]['email'];
        $data['zip_code'] = $result->result_array()[0]['zip_code'];
        $data['zip_code1'] = $result->result_array()[0]['zip_code1'];

        $data['profession'] = $result->result_array()[0]['profession'];
        
        $result = $this->UserModel->user_profile($this->session->userdata('user_id'));

        $data['phone'] = $result->result_array()[0]['phone'];
        $data['website'] = $result->result_array()[0]['website'];
        $data['profile_picture'] = $result->result_array()[0]['profile_picture'];
        $data['facebook'] = $result->result_array()[0]['facebook'];
        $data['twitter'] = $result->result_array()[0]['twitter'];
        $data['googleplus'] = $result->result_array()[0]['googleplus'];
        $data['linkedin'] = $result->result_array()[0]['linkedin'];
        
        $data['description'] = $result->result_array()[0]['description'];
        
        $data['skills'] = json_decode($result->result_array()[0]['skills']);

        $data['occupation'] = $result->result_array()[0]['occupation'];
        $data['professional_details'] = $result->result_array()[0]['professional_details'];

		$this->load->view('includes/header',$header);
		$this->load->view('html/profile',$data);
		$this->load->view('includes/footer');
	}

    public function update_profileimage()
    {
        if(!$this->session->userdata('user_id')){
            echo json_encode(array('error' => "You are not logged in. Can't update profile.....!"));
        }
        else if($_FILES['profileImage']['name'])
        {
            $UploadPreferences = array(
                'upload_path'   => str_replace('\\',"/", realpath(APPPATH . '../') . "/uploads/" . $this->session->userdata('user_name') . "/"),
                'allowed_types' => 'gif|jpg|png|jpeg',
                'file_name' => "profile_".time().".jpg"
            );

            $this->load->library('upload',$UploadPreferences);
            $this->upload->initialize($UploadPreferences);

            if ( !$this->upload->do_upload('profileImage') )
            {
                echo json_encode(array('error' => "Error while uploading file.....!"));
                die();
            }

            $photoInfo = $this->upload->data();

            $path = "uploads/".$this->session->userdata('user_name')."/".$photoInfo['file_name'];
        
            $this->UserModel->update_profileimage( $path , $this->session->userdata('user_id') );
            
            echo json_encode(array('success' => base_url() . $path));
        }
        else
        {
            echo json_encode(array('error' => "Some error occured while submiting form.....!"));
        }
    }

    public function update_profile()
    {
        if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not logged in. Can't update profile.");
            redirect("/");
        }
    
        $this->load->helper('security');
        $this->form_validation->set_rules( 'fullname', 'Full Name', 'trim|required|alpha|min_length[3]|max_length[30]' );
        $this->form_validation->set_rules( 'description', 'Description', 'trim|required|max_length[200]' );
        $this->form_validation->set_rules( 'phone', 'Phone Number', 'trim|max_length[15]' );
        $this->form_validation->set_rules( 'website', 'Website', 'trim|max_length[100]' );
        $this->form_validation->set_rules( 'zipcode', 'City', 'trim|required|max_length[500]');
       $this->form_validation->set_rules( 'zipcode1', 'Zip Code', 'trim|max_length[500]');

        
        $this->form_validation->set_rules( 'interest', 'Profession', 'trim|required' );

        $this->form_validation->set_rules( 'facebook', 'Facebook', 'trim|max_length[255]' );
        $this->form_validation->set_rules( 'twitter', 'Twitter', 'trim|max_length[255]' );
        $this->form_validation->set_rules( 'google-plus', 'Google Plus', 'trim|max_length[255]' );
        $this->form_validation->set_rules( 'linkedin', 'Linkedin', 'trim|max_length[255]' );

        $this->form_validation->set_rules( 'occupation', 'Occupation', 'required|min_length[3]|max_length[255]' );
        $this->form_validation->set_rules( 'professional_details', 'Professional Details', 'trim|required' );

        $this->form_validation->run();
        
        $this->session->set_flashdata('errors', validation_errors());

        if ($this->form_validation->run() === FALSE)
        {
            redirect( base_url() . "user/profile" );
        }
        else
        {   
            $this->UserModel->update_profile( $this->session->userdata('user_id') );
            
            $this->session->set_flashdata('success_message', 'Profile Updated Successfully.....!');
            redirect( base_url() . 'user/profile' );
        }
    }

    public function update_password()
    {
        if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not logged in. Can't update profile.");
            redirect("/");
        }

        $this->load->helper('security');

        $this->form_validation->set_rules( 'old-password', 'Old Password', 'trim|required|min_length[6]|max_length[50]');
        $this->form_validation->set_rules( 'new-password', 'New Password', 'trim|required|min_length[6]|max_length[50]');
        $this->form_validation->set_rules( 'confirm-new-password', 'Confirm New Password', 'trim|required|min_length[6]|max_length[50]');
        
        $this->form_validation->run();
    
        $this->session->set_flashdata('errors', validation_errors());

        if ($this->form_validation->run() === FALSE)
        {
            redirect( base_url() . 'user/profile' );
        }
        else
        {
            if($this->input->post('new-password') != $this->input->post('confirm-new-password'))
            {
                $this->session->set_flashdata('error_message',"Password and Confirm Password don't match.");
                redirect( base_url() . 'user/profile' );
            }
            else
            {
                $return_value = $this->UserModel->update_password( $this->session->userdata('user_id') );

                if($return_value):
                    $this->session->set_flashdata('success_message',"Your password has been updated successfully.....!");
                else:
                    $this->session->set_flashdata('error_message',"Enter valid old password to change password.....!");
                endif;

                redirect( base_url() . 'user/profile' );
            }
        }
    }

    public function resend_link($user_id){

        if($this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are already logged in. Can't request activation link.");
            redirect("/");
        }

        $result = $this->UserModel->resend_activation($user_id);
        
        if($result):
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
                                                                                                            Here is the link to activate your your account.
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
                                                                                            <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;

                                                                                                                line-height:135%;">Activate Your Account</h2>
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
                                                                                            <a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;" href="'. $result->row()->activation_link .'" >Activate</a>
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
                                                                                                        <h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">If "Activate" Button is not working, Paste the following link in your browser url and press enter.</h3>
                                                                                                        <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">'. $result->row()->activation_link .'</div>
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
            $this->email->to($result->row()->email);// change it to yours
            $this->email->subject('Account Activation Link');
            $this->email->message($message);
            if($this->email->send())
            {
                $this->session->set_flashdata("success_message", "Activation link has been sent successfully.");
                redirect("/");
            }
            else
            {
                $this->session->set_flashdata("error_message", "Activation link can't be send at this time. Try Again or Contact Support");
                redirect("/");
            }
        else:
            $this->session->set_flashdata("error_message", "Activation link can't be send at this time. Try Again or Contact Support");
            redirect("/");
        endif;
    }

    function forget_password(){
        
        if($this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are already logged in. Can't request forget password.");
            redirect("/");
        }

        $this->load->helper('security');
		$this->form_validation->set_rules( 'mail', 'Email', 'required');
		$this->form_validation->run();
        
        if ($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('error_message', validation_errors());
			redirect("/");
		}
		else{
			$result=$this->UserModel->forget_password($this->input->post('mail'));

			if($result->row()):
				$url = base_url() . "user/password_request/" . $result->row()->user_id."/".md5($result->row()->password.$result->row()->user_name);

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
                                                                                                        Here is the link to reset your password.
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
                                                                                        <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;

                                                                                                            line-height:135%;">New Message</h2>
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
                                                                                            <a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;" href="'. $url .'" >Reset Password</a>
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
                                                                                                        <h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">If "Reset Password" button is not working, Paste the following link in your browser url and press enter.</h3>
                                                                                                        <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">'. $url.'</div>
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
                $this->email->to($result->row()->email); // change it to yours
                $this->email->subject('Password Change Link');
                $this->email->message($message);
                if($this->email->send())
                {
                    $result = $this->UserModel->forget_password_link($result->row()->user_id,$url);
                    $this->session->set_flashdata("success_message", "Password change request has been sent successfully to your email. Kindly change your password.");
                    redirect("/");
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Password change request can't be send at this time. Try Again or Contact Support.");
                    redirect("/");
                }

			else:
				$this->session->set_flashdata("error_message", "Please Register First.");

				redirect("/");
			endif;
		}
    }
    
    function password_request($param1,$param2)
    {   
        if($this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are already logged in.");
            redirect("/");
        }

        $url = base_url() . "user/password_request" . "/" . $param1 . "/" . $param2;
        
        $result = $this->UserModel->check_password_link($param1,$url);
        
        if($result):
            if($result->row()):
				$data["pass"]=$result->row();
				
				$this->load->view('html/reset-password',$data);
				
            else:
                $this->session->set_flashdata("error_message", "Password link is expired. Try Again");
                redirect("/");
            endif;
        else:
            $this->session->set_flashdata("error_message", "Password link is experied. Try Again");
            redirect("/");
        endif;

    }
    function change_password(){
        
        if($this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are already logged in.");
            redirect("/");
        }
        
        $result = $this->UserModel->change_password();

		$this->session->set_flashdata("success_message", "Password changed successfully. You can Login Now with new password");
        redirect("/");
    }

    public function sign_in(){
        
        if($this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are already logged in.");
            redirect("/");
        }

        $this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->run();
        $this->session->set_flashdata('errors', validation_errors());
        
        if ($this->form_validation->run() === FALSE)
        {
            redirect("/");
        }
        else
        {
            $query = $this->UserModel->sign_in();
            if($query -> num_rows() == 1 )
            {
                    if($query->row()->active==0){
                        $url=base_url()."user/resend_link/".$query->row()->user_id;
                        $this->session->set_flashdata("error_message","Please activate your account <a href='".$url."'>Resend link</a>");
                        redirect('/');
                    }
                    else if($query->row()->admin_approval==0){
                        $this->session->set_flashdata("error_message","Your account has pending Admin Approval.");
                        redirect('/');
					}
                    else{
                        $this->session->set_userdata('user_id',$query->row()->user_id);
                        $this->session->set_userdata('full_name',$query->row()->full_name);
                        $this->session->set_userdata('subscription',$query->row()->subscription);
                        $this->session->set_userdata('user_name',$query->row()->user_name);
                        $this->session->set_userdata('zip_code',$query->row()->zip_code);
                        $this->session->set_userdata('range',1);
                        
                        $this->session->set_flashdata("success_message", "You signed-in successfully.....!");
                        redirect('/home');
                    }
            }
            else
            {
                $this->session->set_flashdata('error_message', "The Username & Password don't exist or don't matched.");
                redirect('/');
            }

        }
    }

	function sign_out(){
        
        if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not logged in.");
            redirect("/");
        }

		$this->session->sess_destroy();
		$this->load->view('html/landing-new');
    }
    
    public function my_listing()
	{
        if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not logged in.");
            redirect("/");
        }

		$header = array();
		
		$header['menu'] = "user";
        
		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

        $data = array();
		
        $data['events'] = $this->EventsModel->user_events_detail( $this->session->userdata('user_id') );
        $data['garage_sales'] = $this->GarageSalesModel->user_garage_sales_detail( $this->session->userdata('user_id') );
        $data['sales'] = $this->SalesModel->user_sales_detail( $this->session->userdata('user_id') );
        $data['coupons'] = $this->CouponsModel->user_coupons_detail( $this->session->userdata('user_id') );
        $data['jobs'] = $this->JobsModel->user_jobs_detail( $this->session->userdata('user_id') );
        $data['service_require'] = $this->ServiceRequireModel->user_service_require_detail( $this->session->userdata('user_id') );
        $data['service_providers'] = $this->ServiceProvidersModel->user_service_providers_detail( $this->session->userdata('user_id') );
        $data['realty'] = $this->RealtyModel->user_realty_detail( $this->session->userdata('user_id') );
        $data['nearby_stores'] = $this->NearbyStoresModel->user_nearby_stores_detail( $this->session->userdata('user_id') );
        $data['attractions'] = $this->AttractionsModel->user_attractions_detail( $this->session->userdata('user_id') );
        $data['hire_a_resource'] = $this->HireAResourceModel->user_hire_a_resource_detail( $this->session->userdata('user_id') );
        $data['tickets'] = $this->TicketsModel->user_tickets_detail( $this->session->userdata('user_id') );
        $data['store_closures'] = $this->StoreClosuresModel->user_store_closures_detail( $this->session->userdata('user_id') );
        $data['learnings'] = $this->LearningsModel->user_learnings_detail( $this->session->userdata('user_id') );
        $data['discards'] = $this->DiscardsModel->user_discards_detail( $this->session->userdata('user_id') );
		$data['restaurants'] = $this->RestaurantsModel->user_restaurants_detail( $this->session->userdata('user_id') );
		
		$data['rent'] = $this->RentModel->user_rent_detail( $this->session->userdata('user_id') );
		$data['funding'] = $this->FundingModel->user_funding_detail( $this->session->userdata('user_id') );
		$data['business_sales'] = $this->BusinessSalesModel->user_business_sales_detail( $this->session->userdata('user_id') );
        $data['short_term_hiring'] = $this->ShortTermHiringModel->user_short_term_hiring_detail( $this->session->userdata('user_id') );
        $data['match_friends'] = $this->MatchFriendsModel->user_match_friends_detail( $this->session->userdata('user_id') );

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'events' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_events'] = $this->EventsModel->user_favourite_events_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_events'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'garage_sales' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_garage_sales'] = $this->GarageSalesModel->user_favourite_garage_sales_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_garage_sales'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'sales' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_sales'] = $this->SalesModel->user_favourite_sales_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_sales'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'coupons' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_coupons'] = $this->CouponsModel->user_favourite_coupons_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_coupons'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'jobs' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_jobs'] = $this->JobsModel->user_favourite_jobs_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_jobs'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'service_require' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_service_require'] = $this->ServiceRequireModel->user_favourite_service_require_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_service_require'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'service_providers' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_service_providers'] = $this->ServiceProvidersModel->user_favourite_service_providers_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_service_providers'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'realty' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_realty'] = $this->RealtyModel->user_favourite_realty_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_realty'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'nearby_stores' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_nearby_stores'] = $this->NearbyStoresModel->user_favourite_nearby_stores_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_nearby_stores'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'attractions' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_attractions'] = $this->AttractionsModel->user_favourite_attractions_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_attractions'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'hire_a_resource' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_hire_a_resource'] = $this->HireAResourceModel->user_favourite_hire_a_resource_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_hire_a_resource'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'tickets' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_tickets'] = $this->TicketsModel->user_favourite_tickets_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_tickets'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'store_closures' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_store_closures'] = $this->StoreClosuresModel->user_favourite_store_closures_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_store_closures'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'learnings' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_learnings'] = $this->LearningsModel->user_favourite_learnings_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_learnings'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'discards' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_discards'] = $this->DiscardsModel->user_favourite_discards_detail( $this->session->userdata('user_id'), $post_ids );
        else
            $data['favourite_discards'] = array();

        $post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'restaurants' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_restaurants'] = $this->RestaurantsModel->user_favourite_restaurants_detail( $this->session->userdata('user_id'), $post_ids );
        else
			$data['favourite_restaurants'] = array();
			
		$post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'rent' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_rent'] = $this->RentModel->user_favourite_rent_detail( $this->session->userdata('user_id'), $post_ids );
        else
			$data['favourite_rent'] = array();
			
		$post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'funding' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_funding'] = $this->FundingModel->user_favourite_funding_detail( $this->session->userdata('user_id'), $post_ids );
        else
			$data['favourite_funding'] = array();
			
		$post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'business_sales' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_business_sales'] = $this->BusinessSalesModel->user_favourite_business_sales_detail( $this->session->userdata('user_id'), $post_ids );
        else
			$data['favourite_business_sales'] = array();
			
		$post_ids = array();
        $ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'short_term_hiring' );
        foreach($ids as $id)
            $post_ids[] = $id['post_id'];

        if(sizeof($post_ids) > 0)
            $data['favourite_short_term_hiring'] = $this->ShortTermHiringModel->user_favourite_short_term_hiring_detail( $this->session->userdata('user_id'), $post_ids );
        else
			$data['favourite_short_term_hiring'] = array();
			
		$post_ids = array();
		$ids = $this->UserModel->favourite_post_type_ids( $this->session->userdata('user_id') , 'match_friends' );
		foreach($ids as $id)
			$post_ids[] = $id['post_id'];

		if(sizeof($post_ids) > 0)
			$data['favourite_match_friends'] = $this->MatchFriendsModel->user_favourite_match_friends_detail( $this->session->userdata('user_id'), $post_ids );
		else
			$data['favourite_match_friends'] = array();
        
        $this->load->view('includes/header',$header);
        $this->load->view('html/my-listing',$data);
        $this->load->view('includes/footer');
    }

    public function submit_listing()
	{
        if(!$this->session->userdata('user_id')){
            $this->session->set_flashdata("error_message", "You are not logged in.");
            redirect("/");
        }

		$header = array();
		
		$header['menu'] = "user";

		if($this->session->userdata('user_id')){
			$header['user_id'] = $this->session->userdata('user_id');
		}

		$this->load->view('includes/header',$header);
		$this->load->view('html/submit-listing');
		$this->load->view('includes/footer');
    }
    
    public function add_to_favourite()
    {
        if( $this->session->userdata("user_id") == null){
            echo "login";
        }
        else if(count($this->UserModel->check_favourite($this->session->userdata("user_id"), $_POST['id'], $_POST['type'] )) > 0)
        {
            echo "already exists";
        }
        else
        {
            $this->UserModel->add_to_favourite($this->session->userdata("user_id"));
            echo "success";
        }
    }

    public function remove_from_favourite()
    {
        if(count($this->UserModel->check_favourite($this->session->userdata("user_id"), $_GET['id'], $_GET['type'])) > 0)
        {
            $this->UserModel->remove_from_favourite($this->session->userdata("user_id"),$_GET['id'],$_GET['type']);
            $this->session->set_flashdata('success_message', 'Favourite Post Removed Successfully');
            redirect('user/my_listing');
        }
        else
        {
            $this->session->set_flashdata('error_message', 'Posts not in favourites.');
            redirect('user/my_listing');
        }
        
    }

    public function edit_submit_listing($param1 = '',$param2 = '')
	{
        if( $param1 != '' && $param2 != '')
        {
            $name = array(); $type = array();
            
            $name[] = 'Events'; $type[] = 'events';
            $name[] = 'GarageSales'; $type[] = 'garage_sales';
            $name[] = 'Sales'; $type[] = 'sales';
            $name[] = 'Coupons'; $type[] = 'coupons';
            $name[] = 'Jobs'; $type[] = 'jobs';
            $name[] = 'ServiceRequire'; $type[] = 'service_require';
            $name[] = 'ServiceProviders'; $type[] = 'service_providers';
            $name[] = 'Realty'; $type[] = 'realty';
            $name[] = 'NearbyStores'; $type[] = 'nearby_stores';
            $name[] = 'Attractions'; $type[] = 'attractions';
            $name[] = 'HireAResource'; $type[] = 'hire_a_resource';
            $name[] = 'Tickets'; $type[] = 'tickets';
            $name[] = 'StoreClosures'; $type[] = 'store_closures';
            $name[] = 'Learnings'; $type[] = 'learnings';
            $name[] = 'Discards'; $type[] = 'discards';
			$name[] = 'Restaurants'; $type[] = 'restaurants';
            $name[] = 'Rent'; $type[] = 'rent';
            $name[] = 'Funding'; $type[] = 'funding';
            $name[] = 'BusinessSales'; $type[] = 'business_sales';
            $name[] = 'MatchFriends'; $type[] = 'match_friends';
            $name[] = 'ShortTermHiring'; $type[] = 'short_term_hiring';


            if( array_search( $param1, $name ) == -1 )
            {   
                $this->session->set_flashdata('error_message', 'Bad Request!');
                redirect('user/my_listing');
            }
            else if( array_search( $param1, $name ) == 0 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->EventsModel->post_details($param2);
                $post['data'] = $post['data']->result();
      
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Events post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Events post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 1 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->GarageSalesModel->post_details($param2);
                $post['data'] = $post['data']->result();
   /*             
echo "<pre>";
                print_r($post['data'][0]);
echo "</pre>";

die();*/

                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Garage Sales post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Garage Sales post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 2 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->SalesModel->post_details($param2);
                $post['data'] = $post['data']->result();
                

                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Sales post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Sales post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 3 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->CouponsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Coupons post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Coupons post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 4 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->JobsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Jobs post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Jobs post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 5 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->ServiceRequireModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Service Require post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Service Require post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 6 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->ServiceProvidersModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Service Providers post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Service Providers post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 7 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->RealtyModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Realty post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Realty post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 8 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->NearbyStoresModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Nearby Stores post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Nearby Stores post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 9 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->AttractionsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Attractions post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Attractions post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 10 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->HireAResourceModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Gigs & Freelancers post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Gigs & Freelancers post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 11 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->TicketsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Tickets post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Tickets post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 12 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->StoreClosuresModel->post_details($param2);
                $post['data'] = $post['data']->result();
                

                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Store Closures post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Store Closures post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 13 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->LearningsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Learnings post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Learnings post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 14 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->DiscardsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Discards post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Discards post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
            else if( array_search( $param1, $name ) == 15 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->RestaurantsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Restaurants post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Restaurants post doesn't exists!");
                    redirect("user/my_listing");
                }
			}
			else if( array_search( $param1, $name ) == 16 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->RentModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Rent post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Rent post doesn't exists!");
                    redirect("user/my_listing");
                }
			}
			else if( array_search( $param1, $name ) == 17 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->FundingModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Funding post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Funding post doesn't exists!");
                    redirect("user/my_listing");
                }
			}
			else if( array_search( $param1, $name ) == 18 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->BusinessSalesModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Business Sales post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Business Sales post doesn't exists!");
                    redirect("user/my_listing");
                }
			}
			else if( array_search( $param1, $name ) == 19 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->MatchFriendsModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Match Friends post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Match Friends post doesn't exists!");
                    redirect("user/my_listing");
                }
			}
			else if( array_search( $param1, $name ) == 20 )
            {
                $post = array();
                $post['name'] = $name[array_search( $param1, $name )];
                $post['type'] = $type[array_search( $param1, $name )];
                $post['data'] = $this->ShortTermHiringModel->post_details($param2);
                $post['data'] = $post['data']->result();
                
                if( sizeof( $post['data'] ) > 0 )
                {
                    if($post['data'][0]->user_id == $this->session->userdata('user_id'))
                    {
                        $header = array();
                        
                        $header['menu'] = "";

                        if($this->session->userdata('user_id')){
                            $header['user_id'] = $this->session->userdata('user_id');
                        }

                        $this->load->view('includes/header',$header);
                        $this->load->view('html/edit-submit-listing',$post);
                        $this->load->view('includes/footer');
                    }
                    else
                    {
                        $this->session->set_flashdata("error_message", "Requested Short Term Hiring post doesn't belongs to you!");
                        redirect("user/my_listing");
                    }
                }
                else
                {
                    $this->session->set_flashdata("error_message", "Requested Short Term Hiring post doesn't exists!");
                    redirect("user/my_listing");
                }
            }
        }
        else
        {
            $this->session->set_flashdata('error_message', 'Bad Request!');
            redirect('user/my_listing');
        }
    }
    
    public function approve_account($param1 = '')
	{
        $user = $this->UserModel->get_user_by_user_name($param1);
        if(count($user->row())){
            if($user->row()->user_name == $param1){
                if($user->row()->admin_approval == 0){
                    $this->UserModel->update_admin_approval($user->row()->user_id);

                    $message = '<!DOCTYPE html>
                    <html><head>
                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                                    <tbody><tr>
                                        <td align="center" valign="top" id="bodyCell">
                                            <table bgcolor="#E1E1E1" border="0" cellpadding="0" cellspacing="0" width="500" id="emailHeader">


                                                <tbody><tr>
                                                    <td align="center" valign="top">

                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody><tr>
                                                                <td align="center" valign="top">

                                                                    <table border="0" cellpadding="10" cellspacing="0" width="500" class="flexibleContainer">
                                                                        <tbody><tr>
                                                                            <td valign="top" width="500" class="flexibleContainerCell">


                                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tbody><tr>
                                                                                        <td align="left" valign="middle" id="invisibleIntroduction" class="flexibleContainerBox" style="display:none !important; mso-hide:all;">
                                                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:100%;">
                                                                                                <tbody><tr>
                                                                                                    <td align="left" class="textContent">
                                                                                                        <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;">
                                                                                                            Here is the link to reset your password.
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody></table>
                                                                                        </td>

                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>

                                                                </td>
                                                            </tr>
                                                        </tbody></table>

                                                    </td>
                                                </tr>
                                            </tbody></table>

                                            <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
                                                <tbody><tr>
                                                    <td align="center" valign="top">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="color:#FFFFFF;" bgcolor="#3498db">
                                                            <tbody><tr>
                                                                <td align="center" valign="top">
                                                                    <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                        <tbody><tr>
                                                                            <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                                <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                                    <tbody><tr>
                                                                                        <td align="center" valign="top" class="textContent">
                                                                                            <h1 style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;">Glokallist</h1>
                                                                                            <img style="color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;" src="http://glokallist.com/assets/images/logo.png">
                                                                                            <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;

                                                                                                                line-height:135%;">Account Approved</h2>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                    </tr><tr>
                                                        <td align="center" valign="top">
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                                <tbody><tr>
                                                                    <td align="center" valign="top">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                            <tbody><tr>
                                                                                <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                                    <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                                        <tbody><tr>
                                                                                            <td align="center" valign="top">
                                                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                                    <tbody><tr>
                                                                                                        <td valign="top" class="textContent">
                                                                                                            <h3 mc:edit="header" style="color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;">Your account has been approved.</h3>
                                                                                                            
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#F8F8F8">
                                                                <tbody><tr>
                                                                    <td align="center" valign="top">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                                                                            <tbody><tr>
                                                                                <td align="center" valign="top" width="500" class="flexibleContainerCell">
                                                                                    <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                                                                        <tbody><tr>
                                                                                            <td align="center" valign="top">
                                                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                                    <tbody><tr>
                                                                                                        <td valign="top" class="textContent">
                                                                                                            <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">glokallist.com. All Right Reserved - 2016</div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody></table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </center>
                    
                        </body></html>';

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
                    $this->email->to($user->row()->email); //$this->email->to('glokallist@gmail.com'); // change it to yours
                    $this->email->subject('Account Approved');
                    $this->email->message($message);
                    if($this->email->send())
                    {
                        echo "Account having email <b>".$user->row()->email."</b> has been approved.";
                    }
                    else
                    {
                        echo "Something went wrong. Contact Support or Try again";
                    }
                }
                else{
                    echo "User not found";    
                }
            }
            else{
                echo "User not found";
            }
        }
        else
        {
            echo "User not found";
        }
    }
    
}
