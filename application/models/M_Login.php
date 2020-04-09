<?php
    class M_login extends CI_Model{
      function login(){
  			$username = $this->input->post('username');
  			$password= $this->input->post('password');
  			$password=md5($password);
              $sql="SELECT * FROM admin where username='$username' and password='$password'";
  			$query = $this->db->query($sql);
          return $query->result();
              }
        }
?>
