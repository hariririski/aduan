<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Umum_Home extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor');
  		}


         public function index()
       	{
          $data['max5'] = $this->M_lapor->max5();
       		$this->load->view('umum_home',$data);
       	}

   }
?>
