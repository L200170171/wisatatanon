<?php
    class M_login extends CI_model{
        public function auth(){
            $un = $this->input->post('un');
            $pw = $this->input->post('pw');

            $user = $this->db->get_where('user',['Username'=>$un])->row_array();
            if($user){
                if($pw == password_verify($pw, $user['Password'])){
                    $data=[
                        'un' => $user['Username'],
                        'nama' => $user['Nama'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/home');
                }
                else{
                    #$this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">Invalid username or password!</div>');
                    redirect('login');
                }
            }
            else{
                #$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Your account is not registered!</div>');
                redirect('login');
            }
        }
        }
    }
?>