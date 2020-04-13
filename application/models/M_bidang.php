<?php
    class M_bidang extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `bidang`");
        return $query->result();
      }


}

?>
