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
        
                array(  'field' => "un",
                        'label' => "username",
                        'rules' => "trim"),
        
                array(  'field' => "pw",
                        'label' => "password",
                        'rules' => "trim|matches[rpw]|min_length[8]"),
        
                array(  'field' => "rpw",
                        'label' => "re-password",
                        'rules' => "trim|matches[pw]")
            );
        }

        public function insert(){
            $password = $this->input->post("pw", true);
            $data = [
                "Nama" => $this->input->post("nama",true),
                "Username" => $this->input->post("un",true),
                "Password" => password_hash($password, PASSWORD_BCRYPT)
            ];
            $this->db->insert('user',$data);
        }

        public function hapus($id){
            $this->db->where('ID_user',$id);
            $this->db->delete('user');
        }
        
        public function update(){
            $data = [
                "Nama" => $this->input->post("nama",true),
                "Username" => $this->input->post("un",true),
                "Password" => $this->input->post("pw",true),
            ];
            $this->db->insert('admin',$data);
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
    }
?>