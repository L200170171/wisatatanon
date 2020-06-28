<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_galeri');
    }

    public function index(){
        $data['data'] = $this->M_galeri->t_galeri();
        $data['title'] = 'Galeri';
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

    public function edit($id){
        $data['data'] = $this->M_galeri->get_data($id);
        $data['title'] = 'Edit Galeri';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/galeri/edit',$data);
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }

    public function insert(){
        $this->M_galeri->insert();
        redirect('admin/galeri');
    }

    public function delete($id){
        $this->M_galeri->hapus_foto($id);
        $this->M_galeri->hapus($id);
        redirect('admin/galeri');
    }

    public function update($id){
        $this->M_galeri->update($id);
        redirect('admin/galeri');
    }
}