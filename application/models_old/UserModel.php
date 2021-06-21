<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model{

    public function __construct()
   	{
		$this->load->database();
    }

    public function insert_user_info()
    {
        $user_name=$this->input->post('user_name');
        $full_name = $this->input->post('full_name');
        $password = $this->input->post('password');
        $link=base_url()."activation/".$user_name.'/'.md5($full_name).'/'.md5($password);

        $message =  '<!DOCTYPE html>
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
                                                                                    <h2 style="text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;">Activate Your Account</h2>
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
                                                                                    <a style="color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;" href="'.$link.'" target="_blank">Activate</a>
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
                                                                                                <div mc:edit="body" style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;">'. $link . '</div>
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
        $this->email->to($this->input->post("email"));// change it to yours
        $this->email->subject('Account Activation Link');
        $this->email->message($message);
        
        if($this->email->send())
        {
            $user_name=$this->input->post('user_name');
            $full_name = $this->input->post('full_name');

            $data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'user_name' => $this->input->post('user_name'),
                'password' => md5($this->input->post('password')),
                'zip_code' => $this->input->post('zipcode'),
                'activation_link'=>$link,
                'profession' => 'guest'
            );

//            if($this->input->post('zipcode1')){
                $data['zip_code1']=$this->input->post('zipcode1');
  //          }

            $this->db->insert('users', $data);
            $username=$this->input->post('user_name');
            $insert_id = $this->db->insert_id();

            $this->insert_profile_info($insert_id,$username);

            return $insert_id;
        }
        else
        {
            // show_error($this->email->print_debugger());
            $this->session->set_flashdata("error_message", "Activation link can't be send at this time. Try Again or Contact Support");
            $insert_id="";
            return	$insert_id;
        }
	}

	public function insert_profile_info($insertId,$usr_name)
    {
        $data = array(
            'user_id' => $insertId,
            'user_name'=>$usr_name
        );

    	return $this->db->insert('profile_info', $data);
    }

    public function activate_link($url,$username,$pass)
    {
        $data1 = array(
            'active'=> 1
        );

        $data2 = array(
        'activation_link'=> $url,
        'user_name'=>$username
        );

        $data3 = array(
            'activation_link'=> ""
        );

        $this->db->where($data2);
        $this->db->update('users', $data1 );

        $q = $this->db->affected_rows();
        
        if($q > 0):
            $this->db->where($data2);
            $this->db->update('users', $data3);
        return true;
        else:
            return false;
        endif;
    }

    public function forget_password($email){
		$data = array(
			'email' => $email
        );
        
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($data);
		return $this->db->get();
    }
    
    public function forget_password_link($usrid,$url){
        $data = array(
            'user_id' => $usrid
        );

        $data1 = array(
            'password_link' => $url
        );

        $this -> db -> where($data);
        $this->db->update('users',$data1);
    }

    public function check_password_link($usrid,$url){
        //$this->db->query('update users set password_link="" where created_date <=NOW() - INTERVAL 4 MINUTE');
        $data = array(
            'user_id' => $usrid,
            'password_link'=>$url,
    
        );
        $this -> db -> select('*');
        $this -> db -> from('users');
        $this -> db -> where($data);
        return $this -> db-> get();
    }

    public function change_password(){
        $data = array(
            'user_id' => $this->input->post("userid"),
            'email'=> $this->input->post("email")
        );

        $data1 = array(
            'password' => md5($this->input->post("password"))
        );

        $this -> db -> where($data);
        $this->db->update('users',$data1);
        
        $q=$this->db->affected_rows();
        
        if($q){
            $this->db->query('UPDATE users SET password_link="" WHERE user_id=' . $this->input->post("userid") );
        }

        return $q;
    }

    public function sign_in(){
		//$this->check_subscription($this->input->post('email'));
		$data = array(
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
    	$this -> db -> select();
    	$this -> db -> from('users');
    	$this -> db -> where($data);
    	$this -> db -> limit(1);
    	return $this -> db-> get();
    }

    public function user_detail($user_id){
		$data = array(
			'user_id' => $user_id
		);
    	$this -> db -> select();
    	$this -> db -> from('users');
    	$this -> db -> where($data);
    	$this -> db -> limit(1);
    	return $this -> db-> get();
    }

    public function resend_activation($user_id)
    {
        $data = array(
            'user_id' => $user_id
        );
        $this -> db -> select('*');
        $this -> db -> from('users');
        $this -> db -> where($data);
        return $this -> db-> get();
    }

    public function user_profile($user_id){
		$data = array(
			'user_id' => $user_id
		);
    	$this -> db -> select();
    	$this -> db -> from('profile_info');
    	$this -> db -> where($data);
    	$this -> db -> limit(1);
    	return $this -> db-> get();
    }

    public function update_profileimage($path,$user_id){

        $data_info = array(
            'profile_picture' => $path
        );

        $where = array(
            'user_id'=> $user_id
        );

        $this->db->where($where);
        $this->db->update('profile_info', $data_info );
    }

    public function update_profile($user_id){
        
        $data_user = array(
            'full_name'=> $this->input->post('fullname'),
            //'email'=> $this->input->post('email'),
            'zip_code'=> $this->input->post('zipcode'),
            'profession'=> $this->input->post('interest')
        );

       // if($this->input->post('zipcode1')){
            $data_user['zip_code1']=$this->input->post('zipcode1');
        //}

        $skills = array();

        for( $i=0 ; $i < sizeof($this->input->post('skills')) ; $i++ )
            $skills[] = strtolower($this->input->post('skills')[$i]);

        $data_info = array(
            'phone'=> $this->input->post('phone'),
            'website'=> $this->input->post('website'),
            'facebook'=> $this->input->post('facebook'),
            'twitter'=> $this->input->post('twitter'),
            'googleplus'=> $this->input->post('google-plus'),
            'linkedin'=> $this->input->post('linkedin'),
            'occupation'=> $this->input->post('occupation'),
            'professional_details'=> $this->input->post('professional_details'),
            'description'=> $this->input->post('description'),
            'skills' => json_encode($skills),
        );


        $where = array(
            'user_id'=> $user_id
        );


        $this->db->where($where);
        $this->db->update('users', $data_user );
        
        $this->db->where($where);
        $this->db->update('profile_info', $data_info );
    }

    public function update_password($user_id){
        $password = array(
            'password'=> md5( $this->input->post('new-password') ),
        );

        $where = array(
            'password' => md5( $this->input->post('old-password') ),
            'user_id' => $user_id,
        );

        $this->db->where($where);
        $this->db->update('users', $password );
        return $this->db->affected_rows();
    }

    public function check_favourite($user_id,$post_id,$post_type)
    {
      $query = $this->db->select('favourites_id')->where('user_id', $user_id)->where('post_id', $post_id)->where('post_type', $post_type)->get('favourites');
      return $query->row_array();
    }
    
    public function add_to_favourite($user_id)
    {
      $data = array(
            'post_id' => $this->input->post('id'),
            'post_type' => $this->input->post('type'),
            'user_id' => $user_id,
      );
      $this->db->insert('favourites',$data);
    }
    
    public function remove_from_favourite($user_id,$post_id,$post_type)
    {
      $this->db->where('user_id', $user_id);
      $this->db->where('post_id', $post_id);
      $this->db->where('post_type', $post_type);
      $this->db->delete('favourites');
    }

    public function favourite_post_type_ids($user_id, $post_type){
        $this->db->select('post_id');
        $this->db->where('user_id', $user_id);
        $this->db->where('post_type', $post_type);
        return $this->db->get('favourites')->result_array();
    }

    public function fetch_professionals($type)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profile_info', 'profile_info.user_id = users.user_id');
        $this->db->where('profession', $type);
        return $this->db->get()->result_array();
    }

    public function fetch_professionals_by_id($type, $id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profile_info', 'profile_info.user_id = users.user_id');
        $this->db->where('profession', $type);
        $this->db->where('users.user_id', $id);
        return $this->db->get()->result_array();
	}
	
	public function fetch_guest_by_id($type, $id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profile_info', 'profile_info.user_id = users.user_id');
        $this->db->where('profession', $type);
        $this->db->where('users.user_id', $id);
        return $this->db->get()->result_array();
    }

    public function fetch_count_professional_listings($id, $table)
    {
        $this->db->where('user_id', $id);
        $this->db->where('profile', 1);
        return sizeof($this->db->get($table)->result_array());
    }

    public function fetch_professional_listings($id, $table)
    {
        $this->db->where('user_id', $id);
        $this->db->where('profile', 1);
        return $this->db->get($table)->result_array();
	}
	
	public function fetch_guest_listings($id, $table)
    {
        $this->db->where('user_id', $id);
        $this->db->where('profile', 1);
        return $this->db->get($table)->result_array();
    }

    public function get_sales_post_for_home(){
        $this->db->order_by('created_at','desc');
        $this->db->limit(4);
        return $this->db->get('sales')->result_array();
    }

    public function get_garage_sales_post_for_home(){
        $this->db->order_by('created_at','desc');
        $this->db->limit(4);
        return $this->db->get('garage_sales')->result_array();
    }

    public function get_service_providers_post_for_home(){
        $this->db->order_by('created_at','desc');
        $this->db->limit(4);
        return $this->db->get('service_providers')->result_array();
    }

    public function get_service_require_post_for_home(){
        $this->db->order_by('created_at','desc');
        $this->db->limit(4);
        return $this->db->get('service_require')->result_array();
    }

    public function professional_user_detail( $user_id ){
        $this->db->where('user_id', $user_id);
    	return $this->db->get('users')->result_array();
    }

    public function professional_user_profile_detail( $user_id ){
        $this->db->where('user_id', $user_id);
    	return $this->db->get('profile_info')->result_array();
    }

    public function get_user_by_user_name($user_name){
        $data = array(
			'user_name' => $user_name
		);
    	$this -> db -> select();
    	$this -> db -> from('users');
    	$this -> db -> where($data);
    	$this -> db -> limit(1);
    	return $this -> db-> get();
    }

    public function update_admin_approval($user_id){
        $data = array(
            'admin_approval'=> 1,
        );

        $where = array(
            'user_id' => $user_id,
        );

        $this->db->where($where);
        $this->db->update('users', $data );
    }

}
