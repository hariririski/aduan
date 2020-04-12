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
          $jenis_pengaduan = $this->input->post('jenis_pengaduan');
          $tanggal = date("Y-m-d");
          $nomor=0;
          $id_pelapor = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
          $file_ktp=$this->random_name(20);
          $ktp=$this->upload_ktp($file_ktp);

          $file_bukti1=$this->random_name(20);
          $bukti1=$this->upload_bukti1($file_bukti1);

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

          $perintah1="INSERT INTO `data_pengaduan`(`id_pelapor`, `id_pengaduan`, `nomor`, `uraian`, `ktp`, `bukti1`, `id_media_pelaporan`, `penerima`,`tanggal_pengaduan`)
                      VALUES ('$id_pelapor','$id_pelapor.$nomor','$new_nomor','$uraian_pengaduan','$ktp','$bukti1','$media','Belum Diterima','$tanggal')";
          $query1=$this->db->query($perintah1);

           if($query==true&&$query1==true){
             return $no_telepon;
           }else{
             return 0;
           }
      }

      function upload_ktp($name){
          $config['upload_path']          = './upload/pengaduan/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = $name;
          $config['overwrite']		      	= false;
          $config['max_size']             = 10024; // 1MB
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('ktp')) {
            $data = array('upload_data' => $this->upload->data());
            return $data['upload_data']['file_name'];
          }
          return false;
        }

      function upload_bukti1($bukti1){
          $config['upload_path']          = './upload/pengaduan/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = $bukti1;
          $config['overwrite']		      	= true;
          $config['max_size']             = 10024; // 1MB
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('bukti1')) {
            $data = array('upload_data' => $this->upload->data());
            return $data['upload_data']['file_name'];
          }
          return false;
        }

        function upload_bukti2($name){
            $config['upload_path']          = './upload/pengaduan/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $name;
            $config['overwrite']		      	= true;
            $config['max_size']             = 10024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti2')) {
              $data = array('upload_data' => $this->upload->data());
              return $data['upload_data']['file_name'];
            }
            return false;
          }


        function random_name($length) {
					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					 $password = substr( str_shuffle( $chars ), 0, $length );
					 return $password;
				 }
    }
?>
