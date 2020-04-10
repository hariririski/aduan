<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Jenis_Pengaduan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_jenis_pengaduan');
  		}


         public function index()
       	{
          $data['jenis_pengaduan'] = $this->M_jenis_pengaduan->lihat();
       		$this->load->view('admin_data_jenis_pengaduan',$data);
       	}

   }
?>
