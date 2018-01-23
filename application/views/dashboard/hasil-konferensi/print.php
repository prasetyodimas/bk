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
  <?php foreach($hasil_konferensi as $list ) { ?>
   <table width="100%" border="0">
      <thead>
       <tr>
        <td colspan="2" align="center"><h4 style="margin:0;margin-bottom:10px;padding:0;">CATATAN HASIL KONFERENSI KASUS</h4></td>
       </tr>
       <tr>
        <td width="5%">NIS Konseli : <?php echo $list->nis;?></td>
       </tr>
       <tr>
         <td width="5%">Tanggal Pelayanan : <?php echo  date("d-m-Y", strtotime($list->tanggal));?></td>
       </tr>
        <tr>
         <td width="5%">Nama Konseli : <?php echo  date("d-m-Y", strtotime($list->tanggal));?></td>
       </tr>
        <tr>
         <td width="5%">Deskripsi Kasus : <?php echo $list->deskripsi_kasus;?></td>
       </tr>
       <tr>
        <td colspan="2"><br><br>Daftar nama peserta konferensi kasus</td>
       </tr>
       <tr>
        <td width="140%">
          <table border="1">
            <tr>
              <td>
                No
              </td>
              <td>
              Nama
              </td>
               <td>
              JABATAN
              </td>
                <td>
              TANDA TANGAN
              </td>
            </tr>
            <tr>
              <td>1</td><td><?php echo $list->nama_1;?></td><td><?php echo $list->jabatan_1;?></td><td width="20%"></td>
            </tr>
            <tr>
              <td>2</td><td><?php echo $list->nama_2;?></td><td><?php echo $list->jabatan_2;?></td><td width="20%"></td>
            </tr>
            <tr>
              <td>3</td><td><?php echo $list->nama_3;?></td><td><?php echo $list->jabatan_3;?></td><td width="20%"></td>
            </tr>
            <tr>
              <td>4</td><td><?php echo $list->nama_4;?></td><td><?php echo $list->jabatan_4;?></td><td width="20%"></td>
            </tr>
            <tr>
              <td>5</td><td><?php echo $list->nama_5;?></td><td><?php echo $list->jabatan_5;?></td><td width="20%"></td>
            </tr>
          </table>
        </td>
       </tr>
        <tr>
              <td><br><br><br></td>
            </tr>
       <tr>
        <td width="40%">
          Hasil Konferensi Kasus
        </td>
        <td width="60%">
          :<?php echo $list->hasil;?>
        </td>
       </tr>
        <tr>
        <td width="40%">
          Evaluasi dan tindak lanjut
        </td>
        <td width="60%">
          :<?php echo $list->evaluasi;?>
        </td>
       </tr>
        <tr>
        <td width="40%">
          Catatan Khusus
        </td>
        <td width="60%">
          :<?php echo $list->catatan;?>
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
          Mengetahui <br><br>Kepala sekolah<br><br>
          
          <?php echo $data->kepsek;?><br><br><br><br>
          _________________<br>
          NIP:<?php echo $data->nip;?>

        </td>
          <td width="50%">
          <br><br><br>
           <p style="font-size:10px"><?php echo $data->kota .' , '.date('d-m-Y');?></p>
          Konselor<br><br><br><br>
          _________________<br>
          NIP
        </td>
      </tr>
       <?php } ;?>
    </table>
   </div>
</body>
</html>