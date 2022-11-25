<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Setting_model extends CI_Model { 
	
	function __construct(){
        parent::__construct();
    }



    function updateSystemSettingFunction(){

        $setting['description']  =   $this->input->post('system_name');
        $this->db->where('type', 'system_name');
        $this->db->update('settings', $setting);

        $setting['description']   =   $this->input->post('system_title');
        $this->db->where('type', 'system_title');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('address');
        $this->db->where('type', 'address');
        $this->db->update('settings', $setting);

        $setting['description'] =   $this->input->post('phone');
        $this->db->where('type', 'phone');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('currency');
        $this->db->where('type', 'currency');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('system_email');
        $this->db->where('type', 'system_email');
        $this->db->update('settings', $setting);

        $setting['description'] =   $this->input->post('language');
        $this->db->where('type', 'language');
        $this->db->update('settings', $setting);

        $setting['description'] =   $this->input->post('text_align');
        $this->db->where('type', 'text_align');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('footer');
        $this->db->where('type', 'footer');
        $this->db->update('settings', $setting);

        $setting['description']  =   $this->input->post('paypal_email');
        $this->db->where('type', 'paypal_email');
        $this->db->update('settings', $setting);

    }


    function uploadSystemLogoFunction (){
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
    }

    function updateSystemThemeFunction(){

        $theme['description']  =   $this->input->post('skin_colour');
        $this->db->where('type', 'skin_colour');
        $this->db->update('settings', $theme);

    }




}