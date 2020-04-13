<?php
    class M_media_pelaporan extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `media_pelaporan`");
        return $query->result();
      }
}

?>
