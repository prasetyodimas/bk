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
  <div id="outtable">
  <div align="center">
  <b style="font-size: 20px;text-align:center">SATUAN KEGIATAN PENDUKUNG </b><br><b>KONFERENSI KASUS</b><br><br>
  </div>
  <?php foreach($satkung_alih_tangan_kasus as $list ) { ?>
   <table width="500px" border="1" style="margin:0 auto">
      <thead>
      <tr>
        <td width="200px">A. topik permasalahan / bahasan</td>
        <td><?php echo $list->topik;?></td>
      </tr>
      <tr>
        <td>B. Bidang Bimbingan</td>
        <td><?php echo $list->bidang_bimbingan;?></td>
      </tr>
       <tr>
        <td>C. Jenis kegiatan</td>
        <td><?php echo $list->jenis_kegiatan;?></td>
      </tr>
       <tr>
        <td>D. Fungsi kegiatan</td>
        <td><?php echo $list->fungsi_kegiatan;?></td>
      </tr>
        <tr>
        <td>E. Tujuan kegiatan</td>
        <td><?php echo $list->tujuan_kegiatan;?></td>
      </tr>
       <tr>
        <td>F. Hasil yang ingin dicapai</td>
        <td><?php echo $list->hasil;?></td>
      </tr>
       <tr>
        <td>G. Subjek yang mengalami masalah</td>
        <td><?php echo $list->subjek;?></td>
      </tr>
       <tr>
        <td>H. Gambaran ringkas masalah</td>
        <td><?php echo $list->ringkas;?></td>
      </tr>
        <tr>
        <td>I. Tempat penyelengaraan</td>
        <td></td>
      </tr>
        <tr>
        <td>J. Waktu dan tanggal</td>
        <td><?php echo $list->kapan;?></td>
      </tr>
        <tr>
        <td>K. Penyelengara kegiatan</td>
        <td><?php echo $list->kepada;?></td>
      </tr>
        <tr>
        <td>L. Pihak yang diikutsertakan</td>
        <td></td>
      </tr>
        <tr>
        <td>M. Bahan dan keterangan yang di bawa ke dalam</td>
        <td><?php echo $list->bahan;?></td>
      </tr>
        <tr>
        <td>N. Penggunaan hasil pertemuan</td>
        <td></td>
      </tr>
        <tr>
        <td>O. Rencana penilaian dan tindak lanjut kegiatan</td>
        <td><?php echo $list->tindak_lanjut;?></td>
      </tr>
        <tr>
        <td>P. Keterkaitan kegiatan</td>
        <td></td>
      </tr>
        <tr>
        <td>Q. Catatan khusus</td>
        <td><?php echo $list->catatan_khusus;?></td>
      </tr>
       
      </thead>
 
    </table>
    <?php } ;?>
    <br><br><br><br><br>
    <table width="100%">
    <?php foreach ($data_sekolah as $data){ ?>
      <tr>
       <td width="50%">
          Mengetahui <br><br><br>
          
         <br><br><br><br>
         Kepala sekolah<br>
          _________________<br>
          NIP:

        </td>
        <td width="60%">
          Konselor <br><br><br>
          
         <br><br><br><br>
          _________________<br>
          NIP:

        </td>
      </tr>
       <?php } ;?>
    </table>
   </div>
</body>
</html>