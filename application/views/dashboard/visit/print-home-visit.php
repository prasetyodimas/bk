<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;?></title>
  <style type="text/css">
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
<?php $nama_sekolah=""; foreach ($data_sekolah as $data){ ?>
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
  <?php $nama_sekolah=$data->nama; };?>
  <div id="outtable">
   <table width="100%">
   <thead>
    <tr>
      <td width="70%">
       <b> No surat :<?php echo $data_home_visit['no_surat'] ;?></b><br><br>
        Yang Bertanda tanggan dibawah ini Kepala   <?php echo $nama_sekolah;?> <br><br>menugaskan<br><br>
        <table width="600px">
          <tr>
            <td width="10%">
              Nama
            </td>
            <td width="90%">
              : <?php echo $data_home_visit['nama'] ;?>
            </td>
          </tr>
          <tr>
            <td width="10%">
              NIP
            </td>
            <td width="90%">
              :<?php echo $data_home_visit['nip'] ;?>
            </td>
          </tr>
          <tr>
            <td width="10%">
              Jabatan
            </td>
            <td width="90%">
              :<?php echo $data_home_visit['jabatan'] ;?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td><br><br><br><br>
      <p>untuk melakukan kunjungan rumah pada:<br></p>
      <br><br>
      <table width="500px">
        <tr>
          <td width="30%">Hari, Tanggal</td>
          <td>: <?php echo $data_home_visit['tanggal'] ;?></td>
        </tr>
        <tr>
          <td width="30%">Hari, Tanggal</td>
          <td>: <?php echo $data_home_visit['tanggal'] ;?> </td>
        </tr>
        <tr>
          <td width="30%">Waktu</td>
          <td>: <?php echo $data_home_visit['waktu'] ;?> </td>
        </tr>
        <tr>
          <td width="30%">Tempat</td>
          <td>: <?php echo $data_home_visit['tempat'] ;?></td>
        </tr>
        <tr>
          <td width="30%">Keperluan</td>
          <td width="70%">: <?php echo $data_home_visit['keperluan'] ;?></td>
        </tr>
      </table>
      </td>
    </tr>

    <tr>
      <td width="40%"><br><br><br>
        <p>Demikian atas perhatian dan kerjsamanya kami ucapkan terima kasih</p><br><br>
      <p>Wasalamuallaikum Wr Wb  </p>
      </td>
    </tr>
   </thead>
    </table>
    <table width="95%">
      <tr>
        <td width="100%">&nbsp;</td>
        <td align="right" width="20%">
           <p align="right" style="vertical-align:top;margin:0;padding:0;"><?php echo date("d-M-Y", strtotime($data_home_visit['tanggal']));?></p><br><br><br><br>
        <p align="right"> Kepala sekolah</p>
        </td>
      </tr>
    </table>
   </div>
</body>
</html>