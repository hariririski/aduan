<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Umum_Info extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor_hp');
         $this->load->model('M_info');
         $this->load->library('pagination');
  		}


         public function index()
       	{
          $this->load->helper('url');
          echo $data1=$this->uri->segment(2);
          if (!isset($data1)){
            $page=0;
          }else {
            $page=$this->uri->segment(2);
          }

      		$data = $this->M_info->jumlah_data();
          $jumlah_data=$data['0']->jumlah;
      		$config['base_url'] = base_url().'info';
      		$config['total_rows'] = $jumlah_data;
      		$config['per_page'] = 6;
      		$from = $page;
          $config['full_tag_open']   = '<div class="pagination">';
          $config['full_tag_close']  = '</div>';

          $config['first_link']      = '<i class="fa fa-angle-left"></i>';
          $config['first_tag_open']  = '<a href="#">';
          $config['first_tag_close'] = '</a>';

          $config['last_link']       = '<i class="fa fa-angle-right">';
          $config['last_tag_open']   = '<a href="#">';
          $config['last_tag_close']  = '</a>';

          $config['cur_tag_open']    = '<a href="#" class="bg-highlight color-white">';
          $config['cur_tag_close']   = '</a>';



      		$this->pagination->initialize($config);
      		$data['user'] = $this->M_info->data($config['per_page'],$from);
       		$this->load->view('umum_informasi_pertanahan',$data);
       	}

   }
?>
