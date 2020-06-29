<?php
    class M_artikel extends CI_model{
        public function t_artikel(){
            $query=$this->db->get("artikel");
            return $query->result_array();
        }

        private function set_upload_options(){   
            $config = array();
            $config['upload_path'] = './assets/images/Artikel'; #path penyimpanan folder
            $config['allowed_types'] = 'jpg|png|jpeg'; #ekstensi yang diizinkan
            $config['encrypt_name'] = TRUE; #pengubahan nama file
            $config['overwrite'] = FALSE;
            $config['width'] = 800;
            $config['height'] = 800;

            return $config;
        }

        function insert(){
            $foto = $_FILES['foto'];
            $_FILES['userfile']['name']= $_FILES['foto']['name'];
            $_FILES['userfile']['type']= $_FILES['foto']['type'];
            $_FILES['userfile']['tmp_name']= $_FILES['foto']['tmp_name'];
            $_FILES['userfile']['error']= $_FILES['foto']['error'];
            $this->load->library('upload');
            $this->upload->initialize($this->set_upload_options());
            if(!$this->upload->do_upload())
                {
                    var_dump($foto);
                    die;
                }
            else{
                    $foto = $this->upload->data('file_name');
                }
            $data = [
                "judul" => $this->input->post("judul",true),
                "isi" => $this->input->post("isi"),
                "thumbnail" => $foto,
                "author" => $this->session->nama
            ];
            $this->db->insert('artikel',$data);
            
        }

        function hapus($id){
            $this->db->where('ID_artikel',$id);
            $this->db->delete('artikel');
        }

        function hapus_foto($id){
			$query = $this->db->get_where('artikel', array("ID_artikel" => $id));
            $results = $query->result_array();
            unlink('./assets/images/Artikel/'.($results[0]['thumbnail']));
        }

        public function get_data($id){
            $this->db->where('ID_artikel',$id);
            $query=$this->db->get("artikel");
            return $query->result_array();
        }

        public function update($id){
            $foto = $_FILES['foto'];
            $cek = $_FILES['foto']['name'];

            if(empty($cek)){
                $foto = $this->input->post('fotoa');
            }
            else{            
                $_FILES['userfile']['name']= $_FILES['foto']['name'];
                $_FILES['userfile']['type']= $_FILES['foto']['type'];
                $_FILES['userfile']['tmp_name']= $_FILES['foto']['tmp_name'];
                $_FILES['userfile']['error']= $_FILES['foto']['error'];
                $this->load->library('upload');
                $this->upload->initialize($this->set_upload_options());
                if(!$this->upload->do_upload())
                    {
                        $this->upload->display_errors();
                        die;
                    }
                else{
                        $foto = $this->upload->data('file_name');
                    }
                $fotoa = $this->input->post('fotoa');
                unlink('./assets/images/artikel/'.$fotoa);
            }
            $data = [
                "judul" => $this->input->post("judul",true),
                "isi" => $this->input->post("isi"),
                "thumbnail" => $foto,
                "author" => $this->session->nama
            ];
            $this->db->where('ID_Artikel',$id);
            $this->db->update('artikel',$data);
        }
    }
?>