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

  #outtable table tr td{
    margin-bottom:20px;
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
   <table width="800px" border="0">
    <?php foreach($data_satkung as $list) { ?>
      <tbody>
        <tr>
          <td width="50%">
            1. Sasaran Pelayanan
          </td>
          <td width="50%">
          : <?php echo $list->nama;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            2. Topik/Permasalahan
          </td>
          <td>
          : <?php echo $list->topik;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            3. Bidang Layanan
          </td>
          <td>
          : <?php echo $list->bidang_layanan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            4. Jenis Layanan
          </td>
          <td>
          : <?php echo $list->jenis_layanan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            5. Fungsi Layanan
          </td>
          <td>
          : <?php echo $list->fungsi_layanan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            6. Kompetensi yang ingin dicapai
          </td>
          <td>
          : <?php echo $list->kompetensi;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            7. Bentuk kegiatan
          </td>
          <td>
          : <?php echo $list->bentuk_kegiatan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            8. Alokasi Waktu
          </td>
          <td>
          : <?php echo $list->alokasi_waktu;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            9. Waktu Pelaksanaan / Semester
          </td>
          <td>
          : <?php echo $list->waktu_pelaksanaan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            10. Tempat kegiatan 
          </td>
          <td>
          : <?php echo $list->tempat_kegiatan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            11. Pelaksanaan kegiatan
          </td>
          <td>
          : <?php echo $list->pelaksana_kegiatan;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            12. Pihak yang disertakan
          </td>
          <td>
          : <?php echo $list->pihak;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            13. Alat perlengkapan
          </td>
          <td>
          : <?php echo $list->alat;?>
          </td>
        </tr>
        <tr>
          <td colspan="2">
           14. Proses kegiatan:
          </td>
        </tr>
         <tr>
          <td width="50%">
            a. Konselor
          </td>
          <td>
          : <?php echo $list->konselor;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            b. Konseli
          </td>
          <td>
          : <?php echo $list->konseli;?>
          </td>
        </tr>
        <tr>
          <td colspan="2">15.Rencana Kegiatan</td>
        </tr>
         <tr>
          <td width="50%">
            a. laiseg
          </td>
          <td>
          : <?php echo $list->laiseg;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            b. laijapen
          </td>
          <td>
          : <?php echo $list->laijapang;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            c. laijapang
          </td>
          <td>
          : <?php echo $list->laijapang;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            16. rencana tindak lanjut
          </td>
          <td>
          : <?php echo $list->rencana_tidak_lanjut;?>
          </td>
        </tr>
         <tr>
          <td width="50%">
            17. Pembiayaan
          </td>
          <td>
          : <?php echo $list->pembiayaan;?>
          </td>
        </tr>
        <tr>
          <td>
          <br><br><br>
          </td>
        </tr>

      </tbody>
     <?php };?>
    <tbody width="200px">
      <tr>
        <td width="50%" align="left">
          Mengetahui,<br>kepala sekolah<br><br><br><br>
          <?php foreach ($data_sekolah as $data){ ?>
          <p><?php echo $data->kepsek;?></p>
          <?php };?>
        </td>
        <td width="50%" align="left">
          Konselor,<br><br><br><br>
        </td>
      </tr>
    </tbody>
   </table>
   </div>
</body>
</html>