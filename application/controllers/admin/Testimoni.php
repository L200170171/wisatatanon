<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_testimoni','testi');
        $this->load->model('M_publikasi','publi');
        if($this->session->userdata('Login') !== TRUE){
            redirect('admin/login');
          }
    }
    
    public function index(){
        $data['testi']=$this->testi->t_testi();
        $data['publik']=$this->publi;
        $data['title']='Testimoni';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/testimoni/testimoni');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }

    public function publish($id){
        $this->publi->insert($id);
        redirect('admin/testimoni');
    }

    
    public function unpublish($id){
        $this->publi->delete($id);
        redirect('admin/testimoni');
    }

    public function delete($id){
        $this->testi->delete($id);
        redirect('admin/testimoni');
    }
}