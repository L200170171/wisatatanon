<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $data = array(
            'title'=>'User',
            'data' => $this->M_user->t_user(),
        );
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/user/user',$data);
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }

    public function tambah(){
        $data['title']='Tambah User';
        $this->load->view('admin/partial/head',$data);
        $this->load->view('admin/partial/navbar');
        $this->load->view('admin/partial/sidebar');
        $this->load->view('admin/dashboard/user/tambah');
        $this->load->view('admin/partial/footer');
        $this->load->view('admin/partial/js.php');
    }

    public function edit($id){
        if($this->M_user->confirm($id))
        {
            $data['title']='Edit User';
            $data['data']=$this->M_user->get_data($id);
            $this->load->view('admin/partial/head',$data);
            $this->load->view('admin/partial/navbar');
            $this->load->view('admin/partial/sidebar');
            $this->load->view('admin/dashboard/user/edit',$data);
            $this->load->view('admin/partial/footer');
            $this->load->view('admin/partial/js.php');
        }
        else{
            $this->session->set_flashdata('data','error');
            redirect('admin/user',reload);
        }
    }

    public function insert(){
        $this->form_validation->set_rules($this->M_user->rules());
        if($this->form_validation->run()==false){
            $data['title']='Tambah User';
            $this->load->view('admin/partial/head',$data);
            $this->load->view('admin/partial/navbar');
            $this->load->view('admin/partial/sidebar');
            $this->load->view('admin/dashboard/user/tambah');
            $this->load->view('admin/partial/footer');
            $this->load->view('admin/partial/js.php');
        }
        else{
            $this->session->set_flashdata('data','add');
            $this->M_user->insert();
            redirect("admin/user");
        }
    }

    public function update($id){
        $this->form_validation->set_rules($this->M_user->rules());
        if($this->form_validation->run()==false){
            $data['title']='Edit User';
            $data['data']=$this->M_user->get_data($id);
            $this->load->view('admin/partial/head',$data);
            $this->load->view('admin/partial/navbar');
            $this->load->view('admin/partial/sidebar');
            $this->load->view('admin/dashboard/user/edit',$data);
            $this->load->view('admin/partial/footer');
            $this->load->view('admin/partial/js.php');
        }
        else{
            $this->session->set_flashdata('data','update');
            $this->M_user->update($id);
            redirect("admin/user");
        }
    }
    
    public function delete($id){
        if($this->M_user->confirm($id))
        {
            $this->M_user->hapus($id);
            $this->session->set_flashdata('data','success');
            redirect('admin/user',reload);
        }
        else{
            $this->session->set_flashdata('data','error');
            redirect('admin/user',reload);
        }
    }
}