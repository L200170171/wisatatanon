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
        $config['base_url'] = site_url('berita/index'); 
        $this->db->like('judul',$data['key']);
        $this->db->or_like('isi',$data['key']);
        $this->db->from('artikel');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 6;
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data'] = $this->M_artikel->getAllBerita($config["per_page"], $data['page'],$data['key']);           
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('pengguna/templates/header');
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/berita/berita',$data);
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
    public function detail($id){
        $data['data'] = $this->M_artikel->get_data($id);
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/berita/berita_detail',$data);
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
}