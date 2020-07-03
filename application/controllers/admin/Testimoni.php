<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('Login') !== TRUE){
            redirect('admin/login');
          }
    }
    
    public function index(){
        $data['title']='Testimoni';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/testimoni/testimoni');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}