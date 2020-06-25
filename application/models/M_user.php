<?php
    class M_user extends CI_model{
        public function t_user(){
            $query=$this->db->get("user");
            return $query->result_array();
        }

        function rules(){
            return array(
                array(  'field' => 'nama',
                        'label' => 'Nama',
                        'rules' => "required|trim"),
        
                array(  'field' => "un",
                        'label' => "username",
                        'rules' => "required|trim"),
        
                array(  'field' => "pw",
                        'label' => "password",
                        'rules' => "required|trim|matches[rpw]|min_length[8]"),
        
                array(  'field' => "rpw",
                        'label' => "re-password",
                        'rules' => "required|trim|matches[pw]")
            );
        }

        public function insert(){
            $data = [
                "Nama" => $this->input->post("nama",true),
                "Username" => $this->input->post("un",true),
                "Password" => $this->input->post("pw",true),
            ];
            $this->db->insert('admin',$data);
        }
        
    }
?>