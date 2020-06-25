<?php
    class M_user extends CI_model{
        public function t_user(){
            $query=$this->db->get("user");
            return $query->result_array();
        }
    }
?>