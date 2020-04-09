<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Pengaduan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor');


  		}


         public function index()
       	{
          $data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
       		$this->load->view('admin_data_pengaduan',$data);
       	}

   }
?>
