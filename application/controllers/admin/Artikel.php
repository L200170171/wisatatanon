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
        $data['data'] = $this->M_artikel->get_data($id);
        $data['title'] = 'Edit Artikel';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/artikel/edit');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }
<<<<<<< HEAD
=======

    public function insert(){
        $this->M_artikel->insert();
        redirect('admin/artikel');
    }
>>>>>>> 05bb40c2797d5788497dbcfeb166c39379a1ae31
        
    public function detail($id){
        $data['data'] = $this->M_artikel->get_data($id);
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        // $this->load->view("pengguna/templates/navbar");
        $this->load->view('admin/dashboard/artikel/detail',$data);
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function insert(){
        $this->M_artikel->insert();
        redirect('admin/artikel');
    }

    public function update($id){
        $this->M_artikel->update($id);
        redirect('admin/artikel');
    }
    
    public function delete($id){
        $this->M_artikel->hapus_foto($id);
        $this->M_artikel->hapus($id);
        redirect('admin/artikel');
    }
}