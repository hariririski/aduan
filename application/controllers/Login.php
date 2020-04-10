<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct() {
       parent::__construct();
			 $this->load->helper('url');
			 $this->load->library('session');
			 $this->load->database();
			 $this->load->model('M_Login');
			 $admin=$this->session->userdata('admin');


   }

	public function logout() {
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect('beranda');
	}

	public function proses_login() {
		$cek=$this->M_Login->login();
		if($cek==true){
		  session_save_path();
      $username = $this->input->post('username');
      $password= $this->input->post('password');
      $password=md5($password);
            $sql="SELECT * FROM admin where username='$username' and password='$password'";
      $query = $this->db->query($sql);
      $data=$query->result();
      foreach ($data as $isi) {
          
            $arraydata = array(
                 'nama'  => $isi->nama,
                 'level'     => $isi->level,
                 'username' => $isi->username,
         );
         $this->session->set_userdata($arraydata);
      }
      redirect('admin');

		}else{
      echo"<script>alert('Anda Gagal Login')</script>";
		redirect('beranda?id=1');
		}
	}

}
