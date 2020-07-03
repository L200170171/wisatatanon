<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_paket');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $data['title']='Paket';
        $data['data'] = $this->M_paket->t_tampil();
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/paket/paket',$data);
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

    public function edit($id){
        $data['title']='Tambah Paket';
        $data['data'] = $this->M_paket->get_data($id);
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/paket/edit',$data);
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }

    public function insert(){
        $this->form_validation->set_rules($this->M_paket->rules());
        if($this->form_validation->run()==false){
            $data['title']='Tambah Paket';
            $this->load->view('admin/partial/head',$data);
            $this->load->view('admin/partial/navbar');
            $this->load->view('admin/partial/sidebar');
            $this->load->view('admin/dashboard/paket/tambah',$data);
            $this->load->view('admin/partial/footer');
            $this->load->view('admin/partial/js.php');
        }
        else{
            $this->M_paket->insert();
            $this->session->set_flashdata('data','add');
            redirect("admin/paket");
        }
    }

    public function update($id){
        $this->form_validation->set_rules($this->M_paket->rules());
        if($this->form_validation->run()==false){
            $data['title']='Tambah Paket';
            $this->load->view('admin/partial/head',$data);
            $this->load->view('admin/partial/navbar');
            $this->load->view('admin/partial/sidebar');
            $this->load->view('admin/dashboard/paket/edit',$data);
            $this->load->view('admin/partial/footer');
            $this->load->view('admin/partial/js.php');
        }
        else{
            $this->M_paket->update($id);
            $this->session->set_flashdata('data','update');
            redirect("admin/paket");
        }
    }
    
    public function delete($id)
    {
        $this->M_paket->hapus_foto($id);
        $this->M_paket->hapus($id);
        $this->session->set_flashdata('data','delete');
        redirect("admin/paket");
    }
}