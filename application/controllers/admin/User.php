<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $data = array(
            'title'=>'User',
            'data' => $this->M_user->t_user(),
        );
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/user/user');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}