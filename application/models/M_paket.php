<?php

    class M_paket extends CI_model{
        function t_tampil(){
            $this->db->order_by('ID_paket', ' DESC');
            $query=$this->db->get("paket_wisata");
            return $query->result_array();
        }


        private function set_upload_options(){   
            $config = array();
            $config['upload_path'] = './assets/images/paket'; #path penyimpanan folder
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
                "nama_paket" => htmlspecialchars($this->input->post("nama",true)),
                "keterangan" => htmlspecialchars($this->input->post("deskripsi",true)),
                "harga" => htmlspecialchars($this->input->post("harga",true)),
                "gambar" => $foto
            ];
            $this->db->insert('paket_wisata',$data);
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
                unlink('./assets/images/paket/'.$fotoa);
            }
            $data = [
                "nama_paket" => htmlspecialchars($this->input->post("nama",true)),
                "keterangan" => htmlspecialchars($this->input->post("deskripsi",true)),
                "harga" => htmlspecialchars($this->input->post("harga",true)),
                "gambar" => $foto
            ];
            $this->db->where('ID_paket',$id);
            $this->db->update('paket_wisata',$data);
        }

        function hapus($id){
            $this->db->where('ID_paket',$id);
            $this->db->delete('paket_wisata');
        }

        function hapus_foto($id){
			$query = $this->db->get_where('paket_wisata', array("ID_paket" => $id));
            $results = $query->result_array();
            unlink('./assets/images/Paket/'.($results[0]['gambar']));
        }
        
        public function get_data($id){
            $this->db->where('ID_paket',$id);
            $query=$this->db->get("paket_wisata");
            return $query->result_array();
        }

        function rules(){
            return array(
                array(  'field' => 'nama',
                        'label' => 'Nama',
                        'rules' => "trim"),
        
                array(  'field' => "keterangan",
                        'label' => "keterangan",
                        'rules' => "trim"),
        
                array(  'field' => "harga",
                        'label' => "harga",
                        'rules' => "trim|numeric")
            );
        }
    }
?>