<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller{
    public function index(){
        $data['title']='Galeri';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/galeri/galeri');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
    public function tambah(){
        $data['title']='Tambah Galeri';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/galeri/tambah');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
}