<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller{
    public function index(){
        $data['title']='Paket';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/paket/paket');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
    public function tambah(){
        $data['title']='Tambah Paket';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/paket/tambah');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
    public function edit($id=0){
        $data['title']='Tambah Paket';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/paket/edit');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}