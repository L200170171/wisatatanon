<?php
    class M_login extends CI_model{
        public function auth(){
            $un = $this->input->post('username',true);
            $pw = $this->input->post('password',true);

            $user = $this->db->get_where('user',['Username'=>$un])->row_array();
            if($user){
                if(password_verify($pw,$user['Password'])){
                    $data=[
                        'un' => $user['Username'],
                        'nama' => $user['Nama'],
                        'Login' => TRUE
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/home');
                }
                else{
                    $this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">Invalid username or password!</div>');
                    redirect('admin/login');
                }
            }
            else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Your account is not registered!</div>');
                redirect('admin/login');
            }
        }
    }
?>