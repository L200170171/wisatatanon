<?php

    class M_galeri extends CI_model{
        function t_galeri(){
            $query=$this->db->get("galeri");
            return $query->result_array();
        }

        public function highlight(){
            $this->db->order_by('tanggal_upload', ' DESC');
            $this->db->limit(3);
            $query = $this->db->get("galeri");
            return $query->result_array();
        }


        private function set_upload_options(){   
            $config = array();
            $config['upload_path'] = './assets/images/Galeri'; #path penyimpanan folder
            $config['allowed_types'] = 'jpg|png|jpeg'; #ekstensi yang diizinkan
            $config['encrypt_name'] = TRUE; #pengubahan nama file
            $config['overwrite'] = FALSE;

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
                    $this->upload->display_errors();
                    die;
                }
            else{
                    $foto = $this->upload->data('file_name');
                }
            $data = [
                "judul" => $this->input->post("judul",true),
                "nama_gambar" => $foto,
                "author" => $this->session->nama
            ];
            $this->db->insert('galeri',$data);
        }

        function update($id){
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
                unlink('./assets/images/galeri/'.$fotoa);
            }
            $data = [
                "judul" => $this->input->post("judul",true),
                "nama_gambar" => $foto,
                "author" => $this->session->nama
            ];
            $this->db->where('ID_gambar',$id);
            $this->db->update('galeri',$data);
        }

        function hapus($id){
            $this->db->where('ID_gambar',$id);
            $this->db->delete('galeri');
        }

        function hapus_foto($id){
			$query = $this->db->get_where('galeri', array("ID_gambar" => $id));
            $results = $query->result_array();
            unlink('./assets/images/Galeri/'.($results[0]['nama_gambar']));
        }
        
        public function get_data($id){
            $this->db->where('ID_gambar',$id);
            $query=$this->db->get("galeri");
            return $query->result_array();
        }
    }
?>