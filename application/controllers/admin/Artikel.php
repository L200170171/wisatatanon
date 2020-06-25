<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller{
    public function index(){
        $data['title']='Artikel';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/artikel/artikel');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
    public function tambah(){
        $data['title']='Tambah Artikel';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/artikel/tambah');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}