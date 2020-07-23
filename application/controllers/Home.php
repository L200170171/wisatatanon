<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_artikel','artikel');
        $this->load->model('M_galeri','galeri');
        $this->load->model('M_paket','paket');
        $this->load->model('M_publikasi','publish');
        $this->load->model('M_testimoni','testi');

    }
    

    public function index()
    {
        $data['testi']=$this->publish->t_data();
        $data['galeri']=$this->galeri->highlight();
        $data['artikel']=$this->artikel->highlight();
        $data['more']=$this->artikel;
        $data['paket']=$this->paket->t_tampil();$data['halaman']="home";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css');
        $this->load->view('pengguna/templates/navbar');
        $this->load->view('pengguna/templates/slider');
        $this->load->view('pengguna/home/home',$data);
        $this->load->view('pengguna/templates/contact'); 
        $this->load->view('pengguna/templates/detailfooter'); 
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
        $this->load->view('pengguna/home/popup');
    }
        
    public function portfolio(){
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/portfolio_detail');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }
    public function selayangPandang(){
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/profil');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function layanan(){
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/layanan');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function klien(){
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/klien');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function formtestimoni(){
        $data['halaman']="inner";
        $this->load->view('pengguna/templates/header',$data);
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/form_testimoni');
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function gallery(){
        $data['halaman']="inner";
        $data['galeri']=$this->galeri->t_galeri();
        $this->load->view('pengguna/templates/header');
        $this->load->view('pengguna/templates/css'); 
        $this->load->view("pengguna/templates/navbar");
        $this->load->view('pengguna/gallery',$data);
        $this->load->view('pengguna/templates/js');
        $this->load->view('pengguna/templates/footer');
    }

    public function insert_testi(){
        $this->testi->insert();
        redirect('Home/formtestimoni');
    }
}
?>