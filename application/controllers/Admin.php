<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();

  		}


         public function index()
       	{

       		$this->load->view('admin_data_admin');
       	}

   }
?>
