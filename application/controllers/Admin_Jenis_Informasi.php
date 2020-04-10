<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Jenis_Informasi extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_jenis_informasi');
  		}


         public function index()
       	{
          $data['jenis_informasi'] = $this->M_jenis_informasi->lihat();
       		$this->load->view('admin_data_jenis_informasi',$data);
       	}

   }
?>
