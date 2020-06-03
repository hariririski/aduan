<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Newsletter extends CI_Controller {

     function __construct() {
         parent::__construct();
         $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_newsletter');


  		}

         public function index()
       	{
          $data['newsletter'] = $this->M_newsletter->lihat();
       		$this->load->view('hp/newsletter',$data);
       	}
         public function data_newsletter()
       	{
          $data['newsletter'] = $this->M_newsletter->lihat2();
       		$this->load->view('admin_data_newsletter',$data);
       	}
         public function tambah_newsletter()
       	{

       		$this->load->view('admin_tambah_newsletter');
       	}
         public function pc()
       	{

       		$this->load->view('umum_newsletter');
       	}


   }
?>
