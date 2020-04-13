<?php
    class M_info extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `informasi` LEFT JOIN jenis_informasi on informasi.id_informasi=jenis_informasi.id_informasi");
        return $query->result();
      }

      function artikel($id){
        $query=$this->db->query("SELECT * FROM `informasi` LEFT JOIN jenis_informasi on informasi.id_informasi=jenis_informasi.id_informasi where informasi.id_informasi=$id ORDER by informasi.tanggal DESC limit 3");
        return $query->result();
      }
      function detail_hp($id){
        $query=$this->db->query("SELECT * FROM `informasi` LEFT JOIN jenis_informasi on informasi.id_informasi=jenis_informasi.id_informasi where informasi.no= $id");
        return $query->result();
      }

      function data($number,$offset){
        $query=$this->db->query("SELECT * FROM `informasi`  Orders LIMIT $number OFFSET $offset");
        return $query->result();
      }

      function jumlah_data(){
        $query=$this->db->query("SELECT count(informasi.no) as jumlah FROM `informasi` LEFT JOIN jenis_informasi on informasi.id_informasi=jenis_informasi.id_informasi");
        return $query->result();
      }
}

?>
