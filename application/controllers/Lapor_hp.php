<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Lapor_hp extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor_hp');
  			 }



        public function tambah_hp(){
            $cek= $this->M_lapor_hp->add();
            if($cek>0){
              redirect('Hp/cek/'.$cek);
            }else{
            echo"alert(Maaf, Gagal Menambahakan Pengaduan)";
            redirect('Hp');
       	   }
        }



   }
?>
