<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Telegram extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('M_lapor_hp');
    $this->load->model('M_lapor');

  }




  public function index(){

    $website = "https://api.telegram.org/bot".$botToken;
    $token = "bot"."1242441147:AAGIV7XHCoqi7itw7thArVMDgJPOLoHzTHg";
    $updates = file_get_contents("php://input");
    $updates = json_decode($updates,true);
    $pesan = $updates[message][text];
    $chat_id = $updates[message][chat][id];
    $pesan = strtoupper($pesan);

    //$pesan="LAPORAN#2020";
    //$chat_id="-343349381";
    if(strpos($pesan,"APOR#")>0){
      $datas = split("#",$pesan);
      $nama = $datas[1];
      $alamat = $datas[2];
      $hp = $datas[3];
      $pesan_balik="Terimakasih";

    }
    else if(strpos($pesan,"APORAN#")>0)
    {
      $datas = split("#",$pesan);
      $tahun = $datas[1];
      //$pesan_balik = "laporan Tahun".$tahun;
      $id=$tahun;
        if($id=="SEMUA"){
          $data['jumlah_pengaduan'] = $this->M_lapor->jumlah_pengaduan();
          $data['tahun_min'] = $this->M_lapor->tahun_min();
          $data['tahun_max'] = $this->M_lapor->tahun_max();
          $data['media_pelaporan'] = $this->M_lapor->media_pelaporan();
          $data['jenis_pengaduan'] = $this->M_lapor->jenis_pengaduan();
          $data['pengaduan_selesai'] = $this->M_lapor->pengaduan_selesai();
          $data['pengaduan_proses'] = $this->M_lapor->pengaduan_proses();
          $no=1;
          $tahun_min;
          $tahun_max;
          foreach ($data['tahun_min'] as $isi) {
            $tahun_min=$isi->tahun;
          }
          foreach ($data['tahun_max'] as $isi) {
            $tahun_max=$isi->tahun;
          }
          $pesan="LAPORAN PENGADUAN TAHUN".$tahun_min." SAMPAI ".$tahun_max;
          $pesan.="%0A%0AMedia Pelaporan%0A";
          foreach ($data['media_pelaporan'] as $isi) {
              $pesan.=$no."%20%20".$isi->nama." : ".$isi->jumlah."%0A";
              $no++;
          }

          $no=1;
          $pesan.="%0A%0Ajenis_pengaduan%0A";
          foreach ($data['jenis_pengaduan'] as $isi) {
              $pesan.=$no."%20%20".$isi->nama." : ".$isi->jumlah."%0A";
              $no++;
          }
          $no=1;
          $pesan.="%0A%0APengaduan%0A";

          foreach ($data['pengaduan_proses'] as $isi) {
              $pesan.="Pengaduan Proses %20=%20".$isi->jumlah."%0A";
          }
          foreach ($data['pengaduan_selesai'] as $isi) {
              $pesan.="Pengaduan Selesai %20=%20".$isi->jumlah."%0A";
          }
          foreach ($data['jumlah_pengaduan'] as $isi) {
              $pesan.="Jumlah Pengaduan %20=%20".$isi->jumlah."%0A";
          }
          $pesan_balik=$pesan;
        }
        else{
          $data['media_pelaporan'] = $this->M_lapor->media_pelaporan_tahun($id);
          $data['jenis_pengaduan'] = $this->M_lapor->jenis_pengaduan_tahun($id);
          $data['jumlah_pengaduan'] = $this->M_lapor->jumlah_pengaduan_tahun($id);
          $data['pengaduan_selesai'] = $this->M_lapor->pengaduan_selesai_tahun($id);
          $data['pengaduan_proses'] = $this->M_lapor->pengaduan_proses_tahun($id);
          $no=1;
          $pesan="LAPORAN PENGADUAN TAHUN ".$tahun;
          $pesan.="%0A%0AMedia Pelaporan%0A";
          foreach ($data['media_pelaporan'] as $isi) {
              $pesan.=$no."%20%20".$isi->nama." : ".$isi->jumlah."%0A";
              $no++;
          }

          $no=1;
          $pesan.="%0A%0AJenis Pengaduan%0A";
          foreach ($data['jenis_pengaduan'] as $isi) {
              $pesan.=$no."%20%20".$isi->nama." : ".$isi->jumlah."%0A";
              $no++;
          }
          $no=1;
          $pesan.="%0A%0AData Pengaduan%0A";

          foreach ($data['pengaduan_proses'] as $isi) {
              $pesan.="Pengaduan Proses %20=%20".$isi->jumlah."%0A";
          }
          foreach ($data['pengaduan_selesai'] as $isi) {
              $pesan.="Pengaduan Selesai %20=%20".$isi->jumlah."%0A";
          }
          foreach ($data['jumlah_pengaduan'] as $isi) {
              $pesan.="Jumlah Pengaduan %20=%20".$isi->jumlah."%0A";
          }

          $pesan_balik=$pesan;
        }
    }
    else {
        $pesan_balik = "Mohon maaf format yang Anda Masukkan Salah, silahkan kirim ulang dengan Format LAPOR%23[NIK]%23[NAMA]%23[HP]%23[ALAMAT]%23[PEKERJAAN]%23[URAIAN PENGADUAN] %0A%0AContoh : LAPOR%231171044509850001%23SUNTADI%23082237663729%23DESA KUTA ALAM, KECAMATAN KUTA ALAM%23KARYAWAN%23ASSAMMUALAIKUM NAMA YANG TERTERA DI SERTIPIKAT DENGAN KTP BERBEDA, APAKAH NANTI TIDAK BERMASALAH? MOHON DI CEK KEMBALI NOMOR SERTIPIKAT XXXXXXX";
    }
    $API = "https://api.telegram.org/$token/sendMessage?parse_mode=html&chat_id=$chat_id&text=$pesan_balik";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;

  }

}
  ?>
