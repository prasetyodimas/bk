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
  <?php foreach($data_konsultasi as $list ) { ?>
   <table width="100%" border="0">
      <thead>
       <tr>
        <td colspan="2" align="center"><h4 style="margin:0;margin-bottom:10px;padding:0;">Kartu Konsltasi</h4></td>
       </tr>
       <tr>
         <td width="40%">Nama siswa</td>
         <td width="60%">: <?php echo $list->nama;?></td>
       </tr>
        <tr>
         <td width="40%">Kelas</td>
         <td width="60%">: <?php echo $list->kelas;?></td>
       </tr>
        <tr>
         <td width="40%">NIS</td>
         <td>: <?php echo $list->nis;?></td>
       </tr>
        <tr>
         <td width="40%">Jurusan</td>
         <td>: <?php echo $list->jurusan;?></td>
       </tr>
         <tr>
         <td width="40%">Jam ke</td>
         <td>: <?php echo $list->jam_ke;?></td>
       </tr>
        <tr>
         <td width="100%" colspan="2">telah menghadap Bpk/Ibu : <?php echo $list->menghadap;?></td>
       </tr>
         <tr>
         <td width="40%">Selesai pukul</td>
         <td>: <?php echo $list->selesai_pukul;?></td>
       </tr>
        <tr>
         <td width="40%">Jam ke</td>
         <td>: <?php echo $list->selesai_jam_ke;?></td>
       </tr>
      <tr>
        <td colspan="2"><br><br>
        <p>atas kerjasamanya ibu/bpk guru kami ucapkan terima kasih </p><br><br>
        </td>
      </tr>
      <tr>
        <td width="50%">
          <p><?php echo date("d-m-Y");?></p><br><br><br>
          Yang bersangkutan<br><br><br><br>
          _________________
        </td>
          <td width="50%">
          <p>&nbsp;</p><br><br><br>
          Guru Pembimbing<br><br><br><br>
          _________________
        </td>
      </tr>
      </thead>
 
    </table>
    <?php } ;?>
   </div>
</body>
</html>