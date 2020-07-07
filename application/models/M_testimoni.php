<?php

class M_testimoni extends CI_model{
    public function t_testi(){
        $this->db->order_by('tanggal', ' DESC');
        $query=$this->db->get("testimoni");
        return $query->result_array();
    }

    public function insert(){
        $data = [
            "nama" => htmlspecialchars($this->input->post("nama-anda",true)),
            "instansi" => htmlspecialchars($this->input->post("instansi",true)),
            "testimoni" => htmlspecialchars($this->input->post("testimoni",true))
        ];
        $this->db->insert('testimoni',$data);
    }

    public function delete($id){
        $this->db->where('ID_testimoni',$id);
        $this->db->delete('testimoni');
    }

}