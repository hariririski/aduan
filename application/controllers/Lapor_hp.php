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
              echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirim Pengduan');window.location.href='hp/detail/".$cek."';</script>");

            }else{
              echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirim Pengaduan');window.location.href='hp';</script>");

       	   }
         }
        public function tambah_dekstop(){
            $cek= $this->M_lapor_hp->add();
            if($cek>0){
                echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirim Pengduan');window.location.href='umum_cek?id=".$cek."';</script>");
            }else{
              echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirim Pengaduan');window.location.href='beranda';</script>");

       	   }
        }
        public function tambah(){
            $cek= $this->M_lapor_hp->add2();
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Mengirim Pengduan');window.location.href='detail_lapor_admin?id=".$cek."';</script>");
            }else{
              echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Mengirim Pengaduan');window.location.href='admin_lapor';</script>");
       	   }
        }

        public function hapus(){
            $id =$this->input->get('id');
            $id2 =$this->input->get('id2');
            $cek= $this->M_lapor->hapus($id,$id2);
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Hapus Pengduan');window.location.href='data';</script>");
            }else{
            //redirect('detail_lapor_admin?id='.$cek);
       	    }
        }



   }
?>
