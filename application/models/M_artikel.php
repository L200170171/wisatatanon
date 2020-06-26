<?php
    class M_artikel extends CI_model{
        public function t_artikel(){
            $query=$this->db->get("artikel");
            return $query->result_array();
        }

        private function set_upload_options(){   
            $config = array();
            $config['upload_path'] = './asset/foto/'; #path penyimpanan folder
            $config['allowed_types'] = 'jpg|png|jpeg'; #ekstensi yang diizinkan
            $config['encrypt_name'] = TRUE; #pengubahan nama file
            $config['overwrite'] = FALSE;
            $config['max_size'] = 0;
            $config['width'] = 800;
            $config['height'] = 800;

            return $config;
        }

        public function insert(){
            
            $thumb = $_FILES['thumb'];
            $_FILES['userfile']['name']= $_FILES['thumb']['name'];
            $_FILES['userfile']['type']= $_FILES['thumb']['type'];
            $_FILES['userfile']['tmp_name']= $_FILES['thumb']['tmp_name'];
            $_FILES['userfile']['error']= $_FILES['thumb']['error'];

            $this->upload->initialize($this->set_upload_options());
            if(!$this->upload->do_upload())
                {
                    $this->upload->display_errors();
                    die;
                }
            else{
                    $thumb = $this->upload->data('file_name');
                }
            $data = [
                "judul" => $this->input->post("judul",true),
                "isi" => $this->input->post("isi",true),
                "thumbnail" => $this->input->post("pw",true),
                "author" => $this->session->nama
            ];
            $this->db->insert('user',$data);
            
        }

    }
?>