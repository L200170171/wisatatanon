<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index(){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/berita/berita');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/detailfooter');
    }
    public function detail($id=0){
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/berita/berita_detail');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
}