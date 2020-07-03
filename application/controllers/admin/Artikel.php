<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_artikel');
        if($this->session->userdata('Login') !== TRUE){
            redirect('admin/login');
          }
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
        $this->session->set_flashdata('data','add');
        redirect('admin/artikel');
    }

    public function update($id){
        $this->M_artikel->update($id);
        $this->session->set_flashdata('data','update');
        redirect('admin/artikel');
    }
    
    public function delete($id){
        $this->M_artikel->hapus_foto($id);
        $this->M_artikel->hapus($id);
        $this->session->set_flashdata('data','delete');
        redirect('admin/artikel');
    }
}