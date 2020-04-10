<?php
    class M_jenis_pengaduan extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `jenis_pengaduan`");
        return $query->result();
      }
}

?>
