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
  <div style="border:1px solid #555555;padding:5px 10px;width:100px;margin:0 auto;font-size:20px;color:#000;margin-right:500px">rahasia</div>
  <b style="font-size: 20px;text-align:center">LAPORAN KONSELING</b><br><br><br>
  </div>
  <?php foreach($konseling_individu as $list ) { ?>
   <table width="500px" border="1" style="margin:0 auto">
      <thead>
      <tr>
        <td>NIS konseli</td>
        <td><?php echo $list->nis;?></td>
      </tr>
      <tr>
        <td>Tanggal Pelayanan</td>
        <td><?php echo $list->tanggal_pelayanan;?></td>
      </tr>
       <tr>
        <td>Pertemuan ke</td>
        <td><?php echo $list->pertemuan_ke;?></td>
      </tr>
       <tr>
        <td>Format</td>
        <td><?php echo $list->format;?></td>
      </tr>
      <tr>
        <td colspan="2"><br><br></td>
      </tr>
      <tr>
        <td colspan="2"><b>Identitas Konseli</b></td>
      </tr>
       <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
        <td><?php echo $list->nama;?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jenis kelamin</td>
        <td><?php echo $list->jkel;?></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; kelas</td>
        <td><?php echo $list->jkel;?></td>
      </tr>
      <tr>
        <td colspan="2"><br><br><br></td>
      </tr>
     <tr>
        <td colspan="2"><b>1.0 Identitas Masalah</b><br>
        </td>
      </tr>
       <tr>
        <td colspan="2">
          &nbsp;&nbsp;1.1 Klasifikasi Masalah<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.1 Umum :<?php echo $list->klasifikasi_umum;?><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.2 belajar: <?php echo $list->belajar;?><br>
        </td>
      </tr>
      <tr>
         <td colspan="2">&nbsp;&nbsp;1.2 Deskripsi masalah:  
         &nbsp;<?php echo $list->deskrpisi_masalah;?></td>
      </tr>
       <tr>
        <td colspan="2"><br><br><br></td>
      </tr>
       <tr>
        <td colspan="2"><b>2.0 Diagnosa</b></td>
      </tr>
       <tr>
        <td colspan="2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1 <?php echo $list->diagnosa1;?><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2  <?php echo $list->diagnosa2;?><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.3  <?php echo $list->diagnosa3;?><br><br>
        </td>
        </tr>
         <tr>
        <td colspan="2"><br><br><br></td>
      </tr>
         <tr>
        <td colspan="2"><b>3.0 Prognosa</b></td>
      </tr>
       <tr>
        <td colspan="2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1 <?php echo $list->prognosa1;?><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2  <?php echo $list->prognosa2;?><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.3  <?php echo $list->prognosa3;?><br><br>
        </td>
        </tr>
         <tr>
        <td colspan="2"><br><br><br></td>
      </tr>
        <tr>
          <td colspan="2"><b>4.0 Treatment</b></td>
        </tr>
        <tr>
          <td colspan="2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $list->treatment;?>
          </td>
        </tr>
      <tr>
        <td colspan="2"><b>5.0 Evaluasi Tindak Lanjut</b></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;5.1 Evaluasi<br>
        <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1.1 Understanding :<?php echo $list->understanding;?><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1.2 Comfort: <?php echo $list->comfort;?><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1.3 Action:<?php echo $list->action;?>
          &nbsp;&nbsp;5.2 Tindak Lanjut 
          <?php echo $list->tindak_lanjut;?>
        </td>
        </tr>
        <tr>
        <td colspan="2">
          *) beri tanda silang / lingkar<br>
          **) coret salah satu<br>
          ***) daftar hadir disediakan di setiap konselor<br>
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