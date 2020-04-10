<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_admin');
  		}


         public function index()
       	{
          $data['admin'] = $this->M_admin->lihat_admin();
       		$this->load->view('admin_data_admin',$data);
       	}

   }
?>
