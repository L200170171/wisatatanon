<?php
    class M_user extends CI_model{
        public function t_user(){
            $query=$this->db->get("User");
            return $query->result_array();
        }

        function rules(){
            return array(
                array(  'field' => 'nama',
                        'label' => 'Nama',
                        'rules' => "trim"),
        
                array(  'field' => "username",
                        'label' => "username",
                        'rules' => "trim"),
        
                array(  'field' => "password",
                        'label' => "password",
                        'rules' => "trim|matches[repassword]|min_length[8]"),
        
                array(  'field' => "repassword",
                        'label' => "re-password",
                        'rules' => "trim|matches[password]")
            );
        }

        public function insert(){
            $password = $this->input->post("password", true);
            $data = [
                "Nama" => $this->input->post("nama",true),
                "Username" => $this->input->post("username",true),
                "Password" => password_hash($password, PASSWORD_DEFAULT)
            ];
            $this->db->insert('user',$data);
        }

        public function hapus($id){
            $this->db->where('ID_user',$id);
            $this->db->delete('user');
        }
        
        public function update($id){
            $password = $this->input->post("password", true);
            $data = [
                "Nama" => $this->input->post("nama",true),
                "Username" => $this->input->post("username",true),
                "Password" => password_hash($password, PASSWORD_DEFAULT)
            ];
            $this->db->where('ID_User',$id);
            $this->db->update('user',$data);
        }

        public function auth(){
            $id = $this->input->post("id",true);
            $pw = $this->input->post("pw",true);
            $query = $this->db->get_where('User', array("ID_User" => $id));
            $results = $query->result_array();
            if($pw == $results[0]['Password']){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function get_data($id){
            $this->db->where('ID_User',$id);
            $query=$this->db->get("user");
            return $query->result_array();
        }
    }
?>