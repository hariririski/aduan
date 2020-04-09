<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Umum_Home extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor');
         $this->load->model('M_lapor_hp');
  		}


         public function index()
       	{
          $data['jumlah_pengaduan'] = $this->M_lapor_hp->jumlah_pengaduan();
          $data['pengaduan_selesai'] = $this->M_lapor_hp->pengaduan_selesai();
          $data['pengaduan_proses'] = $this->M_lapor_hp->pengaduan_proses();
          $data['jumlah_informasi'] = $this->M_lapor_hp->jumlah_informasi();
          $data['max5'] = $this->M_lapor->max5();
       		$this->load->view('umum_home',$data);
       	}

   }
?>
