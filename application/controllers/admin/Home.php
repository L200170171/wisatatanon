<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $data['title']='Home';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/home/home');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}