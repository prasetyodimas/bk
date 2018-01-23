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
   <table width="600px" border="0">
    <?php foreach($data_visit as $list) { ?>
      <tbody>
        <tr>
         <td>
           <p>Yang bertanda tanggan di bawah ini:</p><br>
         </td>
        </tr>
        <tr>
          <td width="30%">Nama</td>
          <td width="70%">: <?php echo $list->nama_petugas_1;?></td>
        </tr>
        <tr>
          <td width="40%">NIP</td>
          <td>: <?php echo $list->nip_petugas_1;?></td>
        </tr>
        <tr>
          <td width="40%">Jabatan</td>
          <td>: <?php echo $list->jabatan_1;?></td>
        </tr>
        <tr>
          <td colspan="2"><br><br>
            <p>Telah Melaksanakan tugas kunjungan rumah bersama:</p><br><br>
          </td>
        </tr>
         <tr>
          <td width="40%">Nama</td>
          <td>: <?php echo $list->nama_petugas_2;?></td>
        </tr>
        <tr>
          <td width="40%">NIP</td>
          <td>: <?php echo $list->nip_petugas_2;?></td>
        </tr>
        <tr>
          <td width="40%">Jabatan</td>
          <td>: <?php echo $list->jabatan_2;?></td>
        </tr>
        <tr>
          <td colspan="2"><br><br><p>Pada tanggal <?php echo $list->tgl_kunjungan ;?> Untuk mengunjungi rumah:</p><br><br><br></td>
        </tr> 
      </tbody>
      <tbody>
         <tr>
        <td width="50%">Nama siswa</td>
        <td>: <?php echo $list->kelas;?></td>
        </tr>
        <tr>
        <td width="50%">Kelas</td>
        <td>: <?php echo $list->kelas;?></td>
        </tr><tr>
        <td width="50%">Jurusan</td>
        <td>: <?php echo $list->jurusan;?></td>
        </tr><tr>
        <td width="50%">No Induk</td>
        <td>: <?php echo $list->nis;?></td>
        </tr><tr>
        <td width="50%">Alamat rumah</td>
        <td>: <?php echo $list->alamat_rumah;?></td>
        </tr>
        <tr>
          <td colspan="2"><br><br>
            Dengan hasil:<br><br>
            <?php echo $list->hasil;?><br><br><br>
          </td>
        </tr>
        <tr>
          <td width="50%" align="left">
          <p>Petugas 1,</p><br><br>
          NIP:<?php echo $list->nip_petugas_1;?>
          </td>
          <td width="50%" align="right">
          <p>Petugas 2,</p><br><br>
          NIP:<?php echo $list->nip_petugas_2;?>
          </td>
        </tr>

      </tbody>
     <?php };?>
   
   </table>
   </div>
</body>
</html>