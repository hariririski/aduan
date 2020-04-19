<?php
    class M_lapor_hp extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM jenis_pengaduan");
        return $query->result();
      }

      function jumlah_pengaduan(){
        $query=$this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan");
        return $query->result();
      }
      function jumlah_informasi(){
        $query=$this->db->query("SELECT COUNT(*) as jumlah FROM informasi");
        return $query->result();
      }
      function pengaduan_selesai(){
        $query=$this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='1'");
        return $query->result();
      }
      function pengaduan_proses(){
        $query=$this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='0'");
        return $query->result();
      }
      function max(){
        $query=$this->db->query("SELECT MAX(nomor) from data_pengaduan");
        return $query->result();
      }

      function data_pengaduan($id){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang WHERE pelapor.no_telepon='$id' ORDER BY tanggal_pengaduan DESC");
        return $query->result();
      }

      function detail_pengaduan($id){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang WHERE data_pengaduan.id_pengaduan='$id'");
        return $query->result();
      }

      function add(){
          $nama_lengkap = $this->input->post('nama_lengkap');
          $alamat = $this->input->post('alamat');
          $email = "-";
          $pekerjaan = $this->input->post('pekerjaan');
          $no_telepon = $this->input->post('no_telepon');
          $uraian_pengaduan = $this->input->post('uraian_pengaduan');
          $nik = $this->input->post('nik');
          $tanggal = date("Y-m-d");
          $nomor=0;
          $id_pelapor = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
          //$file_ktp=$this->random_name(20);
          //$ktp=$this->uploadImage($file_ktp);

          //$file_bukti1=$this->random_name(20);
          //$bukti1=$this->upload_bukti1($file_bukti1);

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

          $media=2;

          $perintah1="INSERT INTO `data_pengaduan`(`id_pelapor`, `id_pengaduan`, `nomor`, `uraian`, `id_media_pelaporan`, `penerima`,`tanggal_pengaduan`,`nik`)
                      VALUES ('$id_pelapor','$id_pelapor$nomor','$new_nomor','$uraian_pengaduan','$media','Belum Diterima','$tanggal','$nik')";
          $query1=$this->db->query($perintah1);

          $media="Laptop/Handphone";
          $this->telegram_add($new_nomor,$nama_lengkap,$no_telepon,$tanggal,$uraian_pengaduan,$media);

           if($query==true&&$query1==true){
             return ($id_pelapor.$nomor);
           }else{
             return 0;
           }
      }

      function add2(){
          $nama_lengkap = $this->input->post('nama_lengkap');
          $alamat = $this->input->post('alamat');
          $email = "-";
          $pekerjaan = $this->input->post('pekerjaan');
          $no_telepon = $this->input->post('no_telepon');
          $uraian_pengaduan = $this->input->post('uraian_pengaduan');
          $jenis_pengaduan = $this->input->post('jenis_pengaduan');
          $media_pelaporan = $this->input->post('media_pelaporan');
          $nik = $this->input->post('nik');
          $tanggal = $this->input->post('tanggal_pengaduan');
          $nomor=0;
          $id_pelapor = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
          //$file_ktp=$this->random_name(20);
          //$ktp=$this->uploadImage($file_ktp);

          //$file_bukti1=$this->random_name(20);
          //$bukti1=$this->upload_bukti1($file_bukti1);

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

          $media=2;

          $perintah1="INSERT INTO `data_pengaduan`(`id_pelapor`, `id_pengaduan`, `nomor`, `uraian`, `penerima`,`tanggal_pengaduan`,`nik`,`jenis_pengaduan`,`id_media_pelaporan`)
                      VALUES ('$id_pelapor','$id_pelapor$nomor','$new_nomor','$uraian_pengaduan','Belum Diterima','$tanggal','$nik','$jenis_pengaduan','$media_pelaporan')";
          $query1=$this->db->query($perintah1);
          $media="Laptop/Handphone";
          $this->telegram_add($new_nomor,$nama_lengkap,$no_telepon,$tanggal,$uraian_pengaduan,$media);

           if($query==true&&$query1==true){
             return $id_pelapor.$nomor;
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
    }
?>
