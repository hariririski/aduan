<?php
    class M_telegram extends CI_Model{



      function add($nik,$nama_lengkap,$no_telepon,$alamat,$pekerjaan,$uraian_pengaduan){

          $email = "-";
          $tanggal = date("Y-m-d");
          $nomor=0;
          $id_pelapor = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));

          $perintah0="INSERT INTO `pelapor`(`nama`, `alamat`, `email`, `pekerjaan`, `no_telepon`, `id_pelapor`)VALUES ('$nama_lengkap','$alamat','$email','$pekerjaan','$no_telepon','$id_pelapor')";
          $query=$this->db->query($perintah0);

            $nomor=0;
            $date=date("Y");
            $perintah3="SELECT COUNT(*) as nomor FROM data_pengaduan WHERE year(tanggal_pengaduan)='$date'";
            $query3=$this->db->query($perintah3);
            $query3->result();
             foreach($query3->result() as $a){
              $nomor=$a->nomor;
             }
             $nomor++;
            $new_nomor=$nomor."/".date("Y");

          $media=3;
          $jenis_pengaduan=5;
          $perintah1="INSERT INTO `data_pengaduan`(`id_pelapor`, `id_pengaduan`, `nomor`, `uraian`, `id_media_pelaporan`, `penerima`,`tanggal_pengaduan`,`nik`,`jenis_pengaduan`)
                      VALUES ('$id_pelapor','$id_pelapor$nomor','$new_nomor','$uraian_pengaduan','$media','Belum Diterima','$tanggal','$nik','$jenis_pengaduan')";
          $query1=$this->db->query($perintah1);

          $media="Telegram";
          $this->telegram_add($new_nomor,$nama_lengkap,$no_telepon,$tanggal,$uraian_pengaduan,$media);

           if($query==true&&$query1==true){
             return ($id_pelapor.$nomor);
           }else{
             return 0;
           }
      }

      public function telegram_add($new_nomor,$nama_lengkap,$no_telepon,$tanggal,$uraian_pengaduan,$media){
        define('BOT_TOKEN', '1242441147:AAGIV7XHCoqi7itw7thArVMDgJPOLoHzTHg');
        define('CHAT_ID','-343349381');
          //$pesan = json_encode($pesan);
          $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=Pengaduan!%0ANo%20%20%20%20%20%20%20%20%20%20%20:%20$new_nomor %0ANama%20%20%20%20%20:%20$nama_lengkap%0ATanggal%20%20:%20$tanggal  %0AHP%20%20%20%20%20%20%20%20%20%20%20:%20$no_telepon %0AMedia%20%20%20%20%20:%20$media %0AUraian%20%20%20%20%20:%0A%20%20%20%20%20$uraian_pengaduan";
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
          curl_setopt($ch, CURLOPT_URL, $API);
          $result = curl_exec($ch);
          curl_close($ch);
          return $result;
        }

        function cek($id){
          $perintah="SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang WHERE data_pengaduan.id_pengaduan='$id'";
          $query=$this->db->query($perintah);
          return $query->result();
        }


    }
?>
