<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Bidang extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_bidang');
  		}


         public function index()
       	{
          $data['bidang'] = $this->M_bidang->lihat();
       		$this->load->view('admin_bidang',$data);
       	}

   }
?>
