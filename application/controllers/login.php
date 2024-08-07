<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct(){
	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');						
	}

    public function index(){
        $this->load->view('login_page');

        if(!empty($this->session->userdata['data_user'])){
            redirect('/home');
        }

    }

    public function regist(){
        $this->load->view('regist_page');
    }

    
    public function aksi_login(){
        $this->load->model('login_model');
		$this->login_model->cek_login();
        // echo'<pre>'; print_r($datalogin); echo '</pre>'; die();
        
    }public function aksi_regist(){
        $this->load->model('login_model');
        $this->login_model->tambah_user();
        // echo'<pre>'; print_r($datalogin); echo '</pre>'; die();
        
        redirect('/login');

        
    }

    public function logout(){
        $this->session->unset_userdata('data_user');
        $this->session->unset_userdata('total');

        $this->session->sess_destroy();

        redirect('/login');
    }
    
    
}   

?>