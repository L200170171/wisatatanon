<?php

    class M_galeri extends CI_model{
        function t_galeri(){
            $query=$this->db->get("galeri");
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

        function insert(){
            $foto = $_FILES['foto'];
            $_FILES['userfile']['name']= $_FILES['foto']['name'];
            $_FILES['userfile']['type']= $_FILES['foto']['type'];
            $_FILES['userfile']['tmp_name']= $_FILES['foto']['tmp_name'];
            $_FILES['userfile']['error']= $_FILES['foto']['error'];

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
                unlink('./asset/foto/galeri/'.$fotoa);
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
			$query = $this->db->get_where('galeri', array("ID_galeri" => $id));
            $results = $query->result_array();
            unlink('./asset/foto/galeri/'.($results[0]['nama_gambar']));
        }

    }
?>