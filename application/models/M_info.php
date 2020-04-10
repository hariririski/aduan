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
}

?>
