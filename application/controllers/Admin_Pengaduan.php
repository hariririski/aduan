<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Pengaduan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor');
         $this->load->model('M_jenis_pengaduan');
         $this->load->model('M_media_pelaporan');
         $this->load->model('M_bidang');


  		}


         public function index()
       	{
          $data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
       		$this->load->view('admin_data_pengaduan',$data);
       	}
         public function lapor()
       	{
          $data['jenis_pengaduan'] = $this->M_jenis_pengaduan->lihat();
          $data['media_pelaporan'] = $this->M_media_pelaporan->lihat();
       		$this->load->view('admin_lapor',$data);
       	}
         public function laporan()
       	{
          $data['tahun'] = $this->M_lapor->tahun();
       		$this->load->view('admin_laporan',$data);
       	}
         public function chart()
       	{

       		$this->load->view('chart');
       	}
         public function detail_laporan()
       	{
          $id =$this->input->get('id');
          if($id==0){
            $data['jumlah_pengaduan'] = $this->M_lapor->jumlah_pengaduan();
            $data['tahun_min'] = $this->M_lapor->tahun_min();
            $data['tahun_max'] = $this->M_lapor->tahun_max();
            $data['media_pelaporan'] = $this->M_lapor->media_pelaporan();
            $data['jenis_pengaduan'] = $this->M_lapor->jenis_pengaduan();
            $data['pengaduan_selesai'] = $this->M_lapor->pengaduan_selesai();
            $data['pengaduan_proses'] = $this->M_lapor->pengaduan_proses();
            $data['detail_pengaduan'] = $this->M_lapor->detail_pengaduan1($id);
          }else{
            $data['media_pelaporan'] = $this->M_lapor->media_pelaporan_tahun($id);
            $data['jenis_pengaduan'] = $this->M_lapor->jenis_pengaduan_tahun($id);
            $data['jumlah_pengaduan'] = $this->M_lapor->jumlah_pengaduan_tahun($id);
            $data['pengaduan_selesai'] = $this->M_lapor->pengaduan_selesai_tahun($id);
            $data['pengaduan_proses'] = $this->M_lapor->pengaduan_proses_tahun($id);
            $data['detail_pengaduan'] = $this->M_lapor->detail_pengaduan2($id);

          }
       		$this->load->view('admin_detail_laporan',$data);
       	}
         public function detail_lapor_admin()
       	{
          $id =$this->input->get('id');
          $data['jenis_pengaduan'] = $this->M_jenis_pengaduan->lihat();
          $data['media_pelaporan'] = $this->M_media_pelaporan->lihat();
          $data['detail'] = $this->M_lapor->detail_pengaduan($id);
       		$this->load->view('admin_detail_lapor',$data);
       	}
         public function tindak_lanjut()
       	{
          $id =$this->input->get('id');
          $data['bidang'] = $this->M_bidang->lihat();
          $data['detail'] = $this->M_lapor->detail_pengaduan($id);
       		$this->load->view('admin_tindak_lanjut',$data);
       	}

        public function cetak_lapor()
       	{
          $id =$this->input->get('id');
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['data_pengaduan'] = $this->M_lapor->detail_pengaduan($id);
       		$this->load->view('admin_cetak_lapor',$data);
       	}

        public function update(){
            $id =$this->input->get('id');
            $id2 =$this->input->get('id2');
            $cek= $this->M_lapor->edit($id,$id2);
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='detail_lapor_admin?id=".$id."';</script>");


            }else{
                echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Updated');window.location.href='detail_lapor_admin?id=".$id."';</script>");
       	    }
        }

        public function proses_tindak_lanjut(){
            $id =$this->input->get('id');
            $id2 =$this->input->get('id2');
            $cek= $this->M_lapor->tindak_lanjut($id,$id2);
            if($cek>0){
              echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='detail_lapor_admin?id=".$id."';</script>");


            }else{
                echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Updated');window.location.href='detail_lapor_admin?id=".$id."';</script>");
       	    }
        }

   }
?>
