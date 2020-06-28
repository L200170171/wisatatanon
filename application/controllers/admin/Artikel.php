<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_artikel');
    }

    public function index(){
        $data['title']='Artikel';
        $data['data'] = $this->M_artikel->t_artikel();
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/artikel/artikel',$data);
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

    public function edit($id){
        $data['title'] = 'Edit Artikel';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/artikel/edit');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }

    public function insert(){
        $this->M_artikel->insert();
        redirect('admin/artikel');
    }
}