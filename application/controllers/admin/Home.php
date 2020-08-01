<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('Login') !== TRUE){
            redirect('admin/login');
          }
        $this->load->model('M_paket','paket');
        $this->load->model('M_artikel','artikel');
    }

    public function index(){
        $data['title']='Home';
        $data['paket']= $this->paket->t_tampil();
        $data['artikel']= $this->artikel->t_artikel();
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/home/home');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}