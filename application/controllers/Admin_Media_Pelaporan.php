<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Media_Pelaporan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_media_pelaporan');
  		}


         public function index()
       	{
          $data['media_pelaporan'] = $this->M_media_pelaporan->lihat();
       		$this->load->view('admin_media_pelaporan',$data);
       	}

   }
?>
