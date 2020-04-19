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
    $botToken = "1242441147:AAGIV7XHCoqi7itw7thArVMDgJPOLoHzTHg";
    $website = "https://api.telegram.org/bot".$botToken;


    $token = "bot"."1242441147:AAGIV7XHCoqi7itw7thArVMDgJPOLoHzTHg";

    $updates = file_get_contents("php://input");

    $updates = json_decode($updates,true);
    $pesan = $updates[message][text];
    $chat_id = $updates[message][chat][id];

    $pesan = strtoupper($pesan);
    if(strpos($pesan,"AFTAR#")>0){
      $datas = split("#",$pesan);
      $nama = $datas[1];
      $alamat = $datas[2];
      $hp = $datas[3];
      $sql = "insert into data_telegram values ('$nama','$alamat','$hp', now())";
      if(mysql_query($sql,$conn)) {
        $pesan_balik = "Terima kasih Data Anda sudah kami simpan.";
      }
      else $pesan_balik = "Data gagal disimpan silahkan coba lagi";
    }
    else {
      echo $pesan_balik = "Mohon maaf format yang Anda kirim salah, silahkan kirim ulang dengan Format DAFTAR%23[NAMA]%23[ALAMAT]%23[HP] Contoh Monster Mahoni%23Jalan Anggrek No 1 Jakarta%2308581234567";
    }
    $url = "https://api.telegram.org/$token/sendMessage?parse_mode=markdown&chat_id=$chat_id&text=$pesan_balik";

    $ch = curl_init();
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);

    $err = curl_error($ch);
    curl_close($ch);

    if($err<>""){
      echo "Error: $err";
    }else{
      echo "Pesan Terkirim";
    }

  }

}
  ?>
