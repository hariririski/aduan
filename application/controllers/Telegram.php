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
      $data['media_pelaporan'] = $this->M_lapor->media_pelaporan_tahun($id);
      $data['jenis_pengaduan'] = $this->M_lapor->jenis_pengaduan_tahun($id);
      $data['jumlah_pengaduan'] = $this->M_lapor->jumlah_pengaduan_tahun($id);
      $data['pengaduan_selesai'] = $this->M_lapor->pengaduan_selesai_tahun($id);
      $data['pengaduan_proses'] = $this->M_lapor->pengaduan_proses_tahun($id);
      $data['detail_pengaduan'] = $this->M_lapor->detail_pengaduan2($id);

      $no=1;
      $pesan="LAPORAN PENGADUAN TAHUN ".$tahun;
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
      $total=0;
      foreach ($data['jumlah_pengaduan'] as $isi) {
          $pesan.="Jumlah Pengaduan %20=%20".$isi->jumlah."%0A";
          $total+=$isi->jumlah;
      }
      foreach ($data['pengaduan_proses'] as $isi) {
          $pesan.="Pengaduan Proses %20=%20".$isi->jumlah."%0A";
          $total+=$isi->jumlah;
      }
      foreach ($data['pengaduan_selesai'] as $isi) {
          $pesan.="Pengaduan Selesai %20=%20".$isi->jumlah."%0A";
          $total+=$isi->jumlah;
      }
      $pesan.="Total %20=%20".$total."%0A";


      $pesan_balik=$pesan;
    }
    else {
        $pesan_balik = "Mohon maaf format yang Anda kirim salah, silahkan kirim ulang dengan Format DAFTAR%23[NAMA]%23[ALAMAT]%23[HP] Contoh Monster Mahoni%23Jalan Anggrek No 1 Jakarta%2308581234567";
    }
    echo $API = "https://api.telegram.org/$token/sendMessage?parse_mode=html&chat_id=$chat_id&text=$pesan_balik";
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
