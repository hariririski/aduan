<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Hp extends CI_Controller {

     function __construct() {
         parent::__construct();
         $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor_hp');
         //$this->load->model('M_lapor');
  		}

         public function home()
       	{
          $data['jumlah_pengaduan'] = $this->M_lapor_hp->jumlah_pengaduan();
          $data['pengaduan_selesai'] = $this->M_lapor_hp->pengaduan_selesai();
          $data['pengaduan_proses'] = $this->M_lapor_hp->pengaduan_proses();
          $data['jenis_pengaduan'] = $this->M_lapor_hp->lihat();
       		$this->load->view('hp/home',$data);
       	}
         public function info()
       	{

       		$this->load->view('hp/info');
       	}
         public function lapor()
       	{

       		$this->load->view('hp/lapor');
       	}

         public function detail(){

           $data['data_pengaduan'] = $this->M_lapor_hp->detail_pengaduan($this->uri->segment(3));
           $this->load->view('hp/Detail',$data);

       	}

       public function cek_pengaduan()
      {

        $this->load->view('hp/cek_pengaduan');
      }

      public function cek_pengecekan()
     {
       $no_telepon = $this->input->get('no_telepon');
       $data['data_pengaduan'] = $this->M_lapor_hp->data_pengaduan($no_telepon);

       $this->load->view('hp/cek_pengecekan',$data);
     }


       public function login_hp()
      {
        $this->load->view('hp/login');
      }

   }
?>
