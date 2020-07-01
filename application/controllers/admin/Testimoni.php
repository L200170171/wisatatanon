<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller{
    
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