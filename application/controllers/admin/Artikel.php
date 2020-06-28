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
    public function edit($id=0){
        $data['title']='Edit Artikel';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/artikel/edit');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
    public function detail(){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        // $this->load->view("pengguna/templates/navbar");
        $this->load->view('admin/dashboard/artikel/detail');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
}