<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;?></title>
  <style type="text/css">
  body{
    font-size: 12px;
  }
    #outtable{
      padding:20px;
      border:1px solid #e3e3e3;
      width:100%;
    }
  #outtable table tr th{
   margin-bottom:10px;
  }
    .short{
      width:20%;
    }
 
    .normal{
      width:80%;
    }
 
    table{
      border-collapse: collapse;
      font-family :arial;
      color:#5E5B5C;
    }
  th{
    text-align:left;
    font-weight: normal;
    font-size:14px;
  }

    .heading{
      clear:both;
      overflow:hidden;
      border-bottom:1px solid #555555;
      width:98%;
      margin:0 auto;
      padding-bottom:20px;
      margin-bottom:20px;
    }

    h1,h2,h3,p{
      padding:0;
      margin:0;
    }
    h1{
      font-size:20px;
    }
    h2{
      font-size:18px;
    }
    h3{
      font-size:16px;
    }
    p{
      font-size:14px;

    }
    .wording-heading{
      text-align:center;
    }

  </style>
</head>
<body>
<?php foreach ($data_sekolah as $data){ ?>
  <div class="heading">
     <table width="100%">
        <thead>
          <tr> 
          <td style="vertical-align:top;text-align:left" width="20%">
          <img src="<?php echo $data->logo_sekolah;?>" width="100px">
          </td>
          <td width="60%" class="wording-heading">
             <h1><?php echo $data->kop_surat1;?></h1>
            <h2><?php echo $data->kop_surat2;?></h2>
            <h2>Kabupaten <?php echo $data->kota;?></h2>
            <h3><?php echo $data->nama;?></h3>
            <p> Alamat:<?php echo $data->alamat;?> Telp / Fax: <?php echo $data->telp;?><?php echo $data->fax;?>  </p>
            <p>Email: <?php echo $data->email;?> Website:<?php echo $data->situs;?>  </p>
          </td>
          <td style="vertical-align:top;text-align:right" width="20%">
           <img src="<?php echo $data->logo_kabupaten;?>" width="120px">
          </td>
          </tr>
        </thead>
     </table>
  </div>
  <?php };?>
  <div id="outtable">
  <?php foreach($rujukan_alih_tangan_kasus as $list ) { ?>
   <table width="100%" border="0">
      <thead>
       <tr>
        <td width="5%">NOMOR : <?php echo $list->no_surat;?></td>
       </tr>
       <tr>
         <td width="5%">HAL : <?php echo  $list->perihal;?></td>
       </tr>
      
       <tr>
        <td colspan="2"><br><br>
        Kepada Yth.<br>
        Bpk/Ibu: <?php echo $list->yang_diundang;?><br>
        Jabatan:<?php echo $list->jabatan;?><br>
        <br><br>
        Di <?php echo $list->di;?><br><br><br><br><br>
        </td>
       </tr>
       <tr>
        <td width="140%"><br><br>
          Dengan Hormat,<br><br>
          Berkaitan dengan kasus klien yang sudah diluar wewenang kami, maka mohon dengan hormat agar penyelesaianya segera ditindak
          lanjuti oleh lembaga/profesi yang berkompeten adapun sebagai bahan pertimbangan kami sertakan beberapa keterangan sebagai berikut
          <br><br><br>

          <table width="500px">
            <tr>
              <td>
                1. Identitas Klien:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama :<?php echo $list->nama;?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat :<?php echo $list->alamat_rumah;?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal lahir :<?php echo $list->tanggal_lahir;?><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan:<?php echo $list->pekerjaan;?><br><br>
              </td>
            </tr>
             <tr>
              <td>
                2. Masalah yang dibadapi &nbsp;&nbsp;&nbsp;:<?php echo $list->masalah;?><br><br>
              </td>
            </tr>
             <tr>
              <td>
                2. Laporan hasil konseling&nbsp;&nbsp;&nbsp;:<?php echo $list->hasil_konseling;?><br><br>
              </td>
            </tr>
             <tr>
              <td>
                3. Catatan khusus &nbsp;&nbsp;&nbsp;:  <?php echo $list->catatan_khusus;?><br><br>
              </td>
            </tr>
            <tr>
              <td width="400px">
              <br><br><br>
                Dengan atas bantuan serta kerjasamanya kami ucapkan banyak terima kasih
                <br><br><br>
              </td>
            </tr>
          </table>
        </td>
       </tr>
       
      </thead>
 
    </table>
    <?php } ;?>
    <br><br><br><br><br>
    <table width="100%">
    <?php foreach ($data_sekolah as $data){ ?>
      <tr>
        <td width="60%">
          Konselor <br><br><br><br>
          
          <br><br><br><br>
          _________________<br>
        

        </td>
      </tr>
       <?php } ;?>
    </table>
   </div>
</body>
</html>