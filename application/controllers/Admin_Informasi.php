<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin_Informasi extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_info');

  		}


         public function index()
       	{
          $data['informasi'] = $this->M_info->lihat();
       		$this->load->view('admin_data_info',$data);
       	}
         public function detail_hp()
       	{
          $id =$this->input->get('id');
          $data['informasi'] = $this->M_info->detail_hp($id);
       		$this->load->view('hp/detail_artikel',$data);
       	}
         public function detail()
       	{
          $id =$this->input->get('id');
          $data['informasi'] = $this->M_info->detail_hp($id);
       		$this->load->view('umum_detail_artikel',$data);
       	}

   }
?>
