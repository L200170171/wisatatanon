<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_paket');
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
            $this->load->view('admin/dashboard/paket/tambah',data);
            $this->load->view('admin/partial/footer');
            $this->load->view('admin/partial/js.php');
        }
        else{
            $this->M_paket->insert();
            redirect("admin/user");
        }
    }
}