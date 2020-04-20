<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lapor Pengaduan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        b {
          font-weight: bold;
          }
        @media all {
          .page-break { display: none; }
          }

          @media print {
          .page-break { display: block; page-break-before: always;page-break-after: always; }
          @page {   margin-top: 0;
                    margin-bottom: 0;
                    margin-right: 40px;
                    margin-left: 40px; }
          }



        }
        </style>
        <script>
        window.print()
        </script>

    </head>
    <body>

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">


            <?php
            foreach($data_pengaduan as $detail){
            ?>
            <!--End of Breadcrumb Banner Area-->
                <!--Start of Single Job Post Area-->
                <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
                  <div class="container  ">
                        <div class="row">
                          <div class="col-md-6 col-lg-6"  >
                              <div >
                                <img src="<?php echo site_url(); ?>assets/umum/images/kop3.png" width="100%">
                                  <P align="center">PENGADUAN <BR>
                                  <table align="center">
                                    <tr>
                                      <td>NOMOR</td>
                                      <td>:</td>
                                      <td><?php echo $detail->nomor;?></td>
                                    </tr>
                                    <tr>
                                      <td>TANGGAL</td>
                                      <td>:</td>
                                      <td><?php
                                      $bulan = array (
                                          1 => 'Januari',
                                          'Februari',
                                          'Maret',
                                          'April',
                                          'Mei',
                                          'Juni',
                                          'Juli',
                                          'Agustus',
                                          'September',
                                          'Oktober',
                                          'November',
                                          'Desember'
                                        );
                                        $pecahkan = explode('-', $detail->tanggal_pengaduan);
                                        $tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                      ?>
                                      <?php echo $tanggal;?></td>
                                    </tr>
                                  </table>
                                  <BR>
                                  <BR>
                                  <P>I.Identitas Pengadu**)</P>
                                  <table  width="100%">
                                    <tr>
                                      <td width="10px">&nbsp;</td>
                                      <td width="10px" style="vertical-align:top" >a.</td>
                                      <td width="34%" style="vertical-align:top" >Nama</td>
                                      <td  width="10px" style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->nama;?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td style="vertical-align:top" >b.</td>
                                      <td style="vertical-align:top" >Alamat atau alamat email</td>
                                      <td style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->alamat;?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td style="vertical-align:top" >c.</td>
                                      <td style="vertical-align:top" >Pekerjaan</td>
                                      <td style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->pekerjaan;?></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td style="vertical-align:top" >b.</td>
                                      <td style="vertical-align:top" >Nomor Telepon</td>
                                      <td style="vertical-align:top" >:</td>
                                      <td style="vertical-align:top" ><?php echo $detail->no_telepon;?></td>
                                    </tr>

                                  </table>
                                  <br>
                                  <P>II. Uraian Pengaduan</P>
                                  <table>
                                    <tr>
                                      <td width="10px">&nbsp;</td>
                                      <td><?php echo $detail->uraian;?></td>
                                    </tr>
                                  </table>
                                  <br>
                                  <br>
                                  III. Bukti Yang Dilampirkan
                                  <table>
                                    <tr>
                                          <td width="10px">&nbsp;</td>
                                          <td >&nbsp;</td>
                                          <td >&nbsp;</td>
                                    </tr>
                                    <?php
                                    if(!empty($detail->nama_bukti1)){
                                      echo '<tr>';
                                      echo '<td></td>';
                                      echo '<td>';
                                      echo '<td>a. </td>';
                                      echo '<td>'.$detail->nama_bukti1.'</td>';
                                    }else{
                                      echo '<tr>';
                                      echo '<td></td>';
                                      echo '<td>';
                                      echo '<td>a. </td>';
                                      echo '<td>.............................</td>';
                                    }
                                    if(!empty($detail->nama_bukti2)){
                                      echo '<tr>';
                                      echo '<td></td>';
                                      echo '<td>';
                                      echo '<td>b. </td>';
                                      echo '<td>'.$detail->nama_bukti2.'</td>';
                                    }
                                    if(!empty($detail->nama_bukti3)){
                                      echo '<tr>';
                                      echo '<td></td>';
                                      echo '<td>';
                                      echo '<td>c. </td>';
                                      echo '<td>'.$detail->nama_bukti3.'</td>';
                                    }
                                    if(!empty($detail->nama_bukti4)){
                                      echo '<tr>';
                                      echo '<td></td>';
                                      echo '<td>';
                                      echo '<td>d. </td>';
                                      echo '<td>'.$detail->nama_bukti4.'</td>';
                                    }
                                    if(!empty($detail->nama_bukti5)){
                                      echo '<tr>';
                                      echo '<td></td>';
                                      echo '<td>';
                                      echo '<td>e. </td>';
                                      echo '<td>'.$detail->nama_bukti5.'</td>';
                                    }

                                    ?>

                                    </tr>

                                  </table>
                                  <br>
                                  <br>
                                  <br>
                                  <P>Dengan ini pengadu membenarkan dan bertanggung jawab atas keterangan yang diberikan.</P>
                                  <BR>
                                  <BR>
                                    <table width="100%">
                                      <tr>
                                        <?php
                                        $bulan = array (
                                        		1 => 'Januari',
                                        		'Februari',
                                        		'Maret',
                                        		'April',
                                        		'Mei',
                                        		'Juni',
                                        		'Juli',
                                        		'Agustus',
                                        		'September',
                                        		'Oktober',
                                        		'November',
                                        		'Desember'
                                        	);
                                        	$pecahkan = explode('-', $detail->tanggal_pengaduan);
                                        	$tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                        ?>
                                        <td>Banda Aceh, <?php echo $tanggal;?></td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>Penerima Pengaduan</td>
                                        <td>Pengadu</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;<br><br><br><br></td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                      </tr>
                                      <tr>
                                        <td>
                                        <?php echo $detail->penerima;?>
                                      </td>
                                        <td><?php echo $detail->nama;?></td>
                                      </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    **) Melampirkan salinan identitas diri (SIM/KTP/Paspor)

                              </div>
                          </div>
                          <div class="page-break"></div>
                          <div class="col-md-6 col-lg-6">
                            <div >
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <br>
                                  <table height="150px" width="100%" border="1" style="border: 1px solid black" align="center">
                                    <tr>
                                      <td align="Center" width="55%"  style="border: 1px solid black" >Jenis Pengaduan</td>
                                      <td align="Center">Penanganan</td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top">
                                        <?php
                                          $huruf;

                                          $arr_az = range('a','z');
                                          $i=0;
                                          $j=0;
                                           foreach($arr_az as $chr) {
                                             $huruf[$i]=$chr;
                                             $i++;
                                           }
                                            ?>
                                          <table height="100px">
                                            <?php
                                            foreach($jenis_pengaduan as $pengaduan){
                                             echo '<tr>';
                                               echo '<td style="vertical-align:top">';
                                               if($pengaduan->id_jenis_pengaduan==$detail->id_jenis_pengaduan){
                                                 echo "".$huruf[$j]."";
                                                  echo ".";
                                               }else{
                                                 echo $huruf[$j];
                                                 echo ". ";
                                               }

                                               echo "</td>";
                                               echo '<td style="vertical-align:top">';
                                               if($pengaduan->id_jenis_pengaduan==$detail->id_jenis_pengaduan){
                                                 echo "".$pengaduan->nama_jenis_pengaduan."";
                                               }else{
                                                 echo $pengaduan->nama_jenis_pengaduan;
                                               }
                                               echo "</td>";
                                               echo "</td>";
                                             echo "</tr>";
                                             $j++;
                                             }
                                             ?>
                                          </table>
                                      </td>

                                        <td style="vertical-align:top;">Kantor Pertanahan Kota Banda Aceh <br> Seksi
                                          <?php
                                           if($detail->id_bidang!==null|| $detail->id_bidang!==0){
                                             echo $detail->nama_bidang;
                                           }
                                          ?>
                                          <BR>
                                          <BR>
                                          <BR>
                                          <BR>
                                          <BR>
                                          <BR>
                                          <BR>

                                        </td>

                                    </tr>
                                  </table>
                                  <BR>
                                  <BR>
                                  catatan:
                                  <table >
                                    <tr>
                                      <td style="vertical-align:top;">
                                        1.
                                      </td>
                                      <td style="vertical-align:top;">
                                        <div align="justify">Pengaduan ini akan dicatat dalam sistem paling lama 1 (satu) hari kerja sejak pengaduan diterima.</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">
                                        2.
                                      </td>
                                      <td style="vertical-align:top;">
                                        <div align="justify">Terhadap pengaduan ini, akan dilakukan pemeriksaan paling lama 1 (satu) hari kerja sejak pengaduan dicatat. (Kecuali untuk pengaduan berupa infotmasi pertanahan atau informasi tatat ruang yang dapat di tangani).</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">
                                        3.
                                      </td>
                                      <td style="vertical-align:top;">
                                        <div align="justify">Informasi tindak lanjut penaganan disampaikan kepada pengadu paling lama 5 hari sejak diterimanya pengaduan oleh unit teknis.</div>
                                      </td>
                                    </tr>
                                  </table>
                                  <br>
                                  <br>
                                  *) Pilih yang sesuai
                                  <br>
                                  <br>
                                  <table border="1">
                                    <tr>
                                      <td height="500px" style="text-align:left" valign="top">
                                        Tindak Lanjut :<br>
                                        Tanggal :
                                        <?php echo $detail->tanggal_selesai;?>
                                        <BR>
                                        <?php echo $detail->tindak_lanjut;?>
                                      </td>
                                    </tr>
                                  </table>

                              </div>

                          </div>

                        </div>
                    </div>
                </div>
          <?php } ?>
                <!--End of Single Job Post Area-->

        </div>
        <!--End of Main Wrapper Area-->



    </body>


</html>
