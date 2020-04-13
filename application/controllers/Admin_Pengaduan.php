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
         public function detail_lapor_admin()
       	{
          $id =$this->input->get('id');
          $data['jenis_pengaduan'] = $this->M_jenis_pengaduan->lihat();
          $data['media_pelaporan'] = $this->M_media_pelaporan->lihat();
          $data['detail'] = $this->M_lapor->detail_pengaduan($id);
       		$this->load->view('admin_detail_lapor',$data);
       	}

   }
?>
