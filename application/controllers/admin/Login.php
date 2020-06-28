<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $this->load->view('admin/login');
    }

    public function auth(){
        $this->form_validation->set_rules("username","username","required|trim");
        $this->form_validation->set_rules("password","password","required|trim");
        if($this->form_validation->run()==false){
            $this->load->view('admin/login');
        }
        else{
            $this->M_login->auth();
        }
    }
}