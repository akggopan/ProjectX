<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Setting extends CI_Controller { 

    function __construct() {
        parent::__construct();
        		$this->load->database();                        
                $this->load->library('session');
                $this->load->model('setting_model');	
               
    }



    function general_settings($param1 = null, $param2 = null, $param3 = null){

        if($param1 == 'update_setting'){
            $this->setting_model->updateSystemSettingFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'setting/general_settings', 'refresh');
        }

        if($param1 == 'upload_logo'){

            $this->setting_model->uploadSystemLogoFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Logo Uploaded Successfully'));
            redirect(base_url() . 'setting/general_settings', 'refresh');

        }

        if($param1 == 'update_theme'){

            $this->setting_model->updateSystemThemeFunction();
            $this->session->set_flashdata('flash_message', get_phrase('Data Updated Successfully'));
            redirect(base_url() . 'setting/general_settings', 'refresh');

        }


    $page_data['page_name'] =   'general_settings';
    $page_data['page_title'] =   get_phrase('General Settings');
    $this->load->view('backend/index', $page_data);

    }









}