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
                "Nama" => htmlspecialchars($this->input->post("nama",true)),
                "Username" => htmlspecialchars($this->input->post("username",true)),
                "Password" => htmlspecialchars(password_hash($password, PASSWORD_DEFAULT))
            ];
            $this->db->insert('user',$data);
        }

        public function hapus($id){
            $this->db->where('ID_user',$id);
            $this->db->delete('user');
        }
        
        public function update($id){
            if(!empty($this->input->post("password", true))){
                $password = password_hash($this->input->post("password", true), PASSWORD_DEFAULT);
            }
            else{
                $query = $this->db->get_where('user', array("ID_User" => $id));
                $results = $query->result_array();
                $password = $results[0]['Password'];
            }
            $data = [
                "Nama" => htmlspecialchars($this->input->post("nama",true)),
                "Username" => htmlspecialchars($this->input->post("username",true)),
                "Password" => htmlspecialchars($password)
            ];
            $this->db->where('ID_User',$id);
            $this->db->update('user',$data);
        }

        public function get_data($id){
            $this->db->where('ID_User',$id);
            $query=$this->db->get("user");
            return $query->result_array();
        }

        public function confirm($id){
            $query = $this->db->get_where('user', array("ID_User" => $id));
            $results = $query->result_array();
            $pw = $this->input->post('pass');
            if(password_verify($pw,$results[0]['Password'])){
                return True;
            }
            else{
                return False;
            }
        }
    }
?>