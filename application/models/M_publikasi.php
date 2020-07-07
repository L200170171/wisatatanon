<?php

class M_publikasi extends CI_model{
    public function cek($id){
        $cek = $this->db->get_where('publikasi',['ID_testimoni'=>$id])->num_rows();
        return $cek;
    }

    function sidebar(){
        $query = $this->db->order_by('agenda_mulai', ' DESC');
        $query = $this->db->get('tbl_agenda',3);    
        return $query->result_array();
    }

    public function t_data(){
        $this->db->select('*');
        $this->db->from('publikasi');
        $this->db->join('testimoni', 'testimoni.ID_testimoni = publikasi.ID_testimoni');
        $query = $this->db->order_by('tanggal', ' DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query->result_array();
        }

    public function insert($id){
        $this->db->insert('publikasi',['ID_testimoni'=>$id]);
    }

    public function delete($id){
        $this->db->where('ID_testimoni',$id);
        $this->db->delete('publikasi');
    }

}