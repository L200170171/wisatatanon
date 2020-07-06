<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct(){
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');
        $this->load->model('M_artikel');
        $this->load->helper('text');
        
    }
    public function index(){            
        if($this->input->post('submit')){
            $data['key'] = $this->input->post('keyword');
            $this->session->set_userdata('key',$data['key']);
        }
        else{
            $data['key'] = $this->session->userdata('key');
        }
        $data['more'] = $this->M_artikel;            
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/berita/berita',$data);
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