<?php
    class M_lapor extends CI_Model{

      // function lihat(){
      //   $query=$this->db->query("SELECT * FROM jenis_pengaduan");
      //   return $query->result();
      // }
      function semua_pengaduan(){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan ORDER BY data_pengaduan.tanggal_pengaduan DESC");
        return $query->result();
      }
      function proses(){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan WHERE data_pengaduan.status=0 ORDER BY data_pengaduan.tanggal_pengaduan DESC");
        return $query->result();
      }
      function max5(){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan WHERE data_pengaduan.status=1 ORDER BY data_pengaduan.tanggal_pengaduan DESC LIMIT 5");
        return $query->result();
      }
      function detail_pengaduan($id){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan WHERE data_pengaduan.id_pengaduan='$id'");
        return $query->result();
      }
     //  function laporan($tgl1,$tgl2){
     //    $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan WHERE (tanggal_pengaduan BETWEEN  '$tgl1' AND '$tgl2')");
     //    return $query->result();
     //  }
     //  function setting(){
     //    $query=$this->db->query("SELECT * from `setting`");
     //    return $query->result();
     //  }

     //
     //  function penyelesaian($id){
     //    $penyelesaian = $this->input->post('penyelesaian');
     //    $bidang = $this->input->post('bidang');
     //    $status = 1;
     //
     //   $data2 = array(
     //       'tindak_lanjut'=>$penyelesaian,
     //       'id_bidang'=>$bidang,
     //       'status'=>$status
     //
     //
     //     );
     //   $this->db->where('id_pengaduan',$id);
     //   $cek1=$this->db->update('data_pengaduan',$data2);
     //   return $cek1;
     // }
     //




      function hapus($id_pengaduan,$id_pelapor){
        echo $perintah1="DELETE FROM `pelapor` WHERE id_pelapor='$id_pelapor'";
        $query=$this->db->query($perintah1);
        echo $perintah2="DELETE FROM `data_pengaduan` WHERE id_pengaduan='$id_pengaduan'";
        $query2=$this->db->query($perintah2);
        return $id_pengaduan;
      }

     //  function upload_bukti1($bukti1){
     //      $config['upload_path']          = './assets/upload/';
     //      $config['allowed_types']        = 'gif|jpg|png';
     //      $config['file_name']            = $bukti1;
     //      $config['overwrite']		      	= true;
     //      $config['max_size']             = 10024; // 1MB
     //      // $config['max_width']            = 1024;
     //      // $config['max_height']           = 768;
     //
     //      $this->load->library('upload', $config);
     //
     //      if ($this->upload->do_upload('bukti1')) {
     //        $data = array('upload_data' => $this->upload->data());
     //        return $data['upload_data']['file_name'];
     //      }
     //      return false;
     //    }
     //
     //    function upload_bukti2($name){
     //        $config['upload_path']          = './assets/upload/';
     //        $config['allowed_types']        = 'gif|jpg|png';
     //        $config['file_name']            = $name;
     //        $config['overwrite']		      	= true;
     //        $config['max_size']             = 10024; // 1MB
     //        // $config['max_width']            = 1024;
     //        // $config['max_height']           = 768;
     //
     //        $this->load->library('upload', $config);
     //
     //        if ($this->upload->do_upload('bukti2')) {
     //          $data = array('upload_data' => $this->upload->data());
     //          return $data['upload_data']['file_name'];
     //        }
     //        return false;
     //      }
     //
     //      function upload_bukti3($name){
     //          $config['upload_path']          = './assets/upload/';
     //          $config['allowed_types']        = 'gif|jpg|png';
     //          $config['file_name']            = $name;
     //          $config['overwrite']		      	= true;
     //          $config['max_size']             = 10024; // 1MB
     //          // $config['max_width']            = 1024;
     //          // $config['max_height']           = 768;
     //
     //          $this->load->library('upload', $config);
     //
     //          if ($this->upload->do_upload('bukti3')) {
     //            $data = array('upload_data' => $this->upload->data());
     //            return $data['upload_data']['file_name'];
     //          }
     //          return false;
     //        }
     //
     //
     //    function random_name($length) {
			// 		 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			// 		 $password = substr( str_shuffle( $chars ), 0, $length );
			// 		 return $password;
			// 	 }
    }
?>
