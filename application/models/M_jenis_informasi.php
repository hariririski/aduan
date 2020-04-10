<?php
    class M_jenis_informasi extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `jenis_informasi`");
        return $query->result();
      }
}

?>
