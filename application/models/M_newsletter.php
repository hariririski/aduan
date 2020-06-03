<?php
    class M_newsletter extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM `newsletter` order by tanggal desc limit 3");
        return $query->result();
      }
      function lihat2(){
        $query=$this->db->query("SELECT * FROM `newsletter` order by tanggal ");
        return $query->result();
      }

      function artikel($id){
        $query=$this->db->query("SELECT * FROM `newsletter` where id_newsletter=$id ");
        return $query->result();
      }


      function data($number,$offset){
        $query=$this->db->query("SELECT * FROM `newsletter`  Orders LIMIT $number OFFSET $offset");
        return $query->result();
      }

      function jumlah_data(){
        $query=$this->db->query("SELECT count(id_newsletter) as jumlah FROM `newsletter`");
        return $query->result();
      }
}

?>
