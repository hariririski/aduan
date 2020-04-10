<?php
    class M_login extends CI_Model{
      function login(){
  			$username = $this->input->post('username');
  			$password= $this->input->post('password');
  			$password=md5($password);
              $sql="SELECT * FROM admin where username='$username' and password='$password' and status=1";
  			$query = $this->db->query($sql);
          return $query->result();
              }
        }
?>
