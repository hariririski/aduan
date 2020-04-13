<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Lapor_hp extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor_hp');
         $this->load->model('M_lapor');

  			 }



        public function tambah_hp(){
            $cek= $this->M_lapor_hp->add();
            if($cek>0){
              redirect("pengecekan_url?no_telepon=".$cek."");
            }else{
            echo"alert(Maaf, Gagal Menambahakan Pengaduan)";
            redirect('hp');
       	   }
         }
        public function tambah_dekstop(){
            $cek= $this->M_lapor_hp->add();
            if($cek>0){
              redirect("umum_cek?no_telepon=".$cek."");
            }else{
            echo"alert(Maaf, Gagal Menambahkan Pengaduan)";
            redirect('beranda');
       	   }
        }
        public function tambah(){
            $cek= $this->M_lapor_hp->add2();
            if($cek>0){
              redirect("detail_lapor_admin?id=".$cek."");
            }else{
            echo"alert(Maaf, Gagal Menambahkan Pengaduan)";
            redirect('admin_lapor');
       	   }
        }

        public function hapus(){
            $id =$this->input->get('id');
            $id2 =$this->input->get('id2');
            $cek= $this->M_lapor->hapus($id,$id2);
            if($cek>0){
              redirect('data');
            }else{
            //redirect('detail_lapor_admin?id='.$cek);
       	    }
        }



   }
?>
