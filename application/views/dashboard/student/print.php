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
  <?php foreach($data_siswa as $list) { ?>
  <table width="100%">
      <tbody>
        <tr>
          <th> <img src="<?php echo $list->photo ;?>" width="120px"><br><br></th>
        </tr>
        <tr>
          <th class="short">NIS </th>
          <th class="normal">: <?php echo $list->nis ;?></th>
          <th class="short">Tahun Pelajaran </th>
          <th class="normal">: <?php echo $list->thn_pelajaran ;?></th>

        </tr>
        <tr>
          <th class="short">Nama </th>
          <th class="normal">: <?php echo $list->nama ;?></th>
           <th class="short">Asal sekolah </th>
          <th class="normal">: <?php echo $list->asal_sekolah ;?></th>
        </tr>
         <tr>
          <th class="short">Nama Pangilan </th>
          <th class="normal">: <?php echo $list->nama_pangilan ;?></th>
           <th class="short">Jumlah SKHU</th>
          <th class="normal">: <?php echo $list->jumlah_skhu ;?></th>
        </tr>
         <tr>
          <th class="short">Tempat Lahir </th>
          <th class="normal">: <?php echo $list->tempat_lahir ;?></th>
           <th class="short">Kelas</th>
          <th class="normal">: <?php echo $list->kelas ;?></th>
        </tr>
         <tr>
          <th class="short">Telepon rumah </th>
          <th class="normal">: <?php echo $list->telp_rumah ;?></th>
           <th class="short">Jurusan </th>
          <th class="normal">: <?php echo $list->jurusan ;?></th>
        </tr>
         <tr>
          <th class="short">Hp </th>
          <th class="normal">: <?php echo $list->hp ;?></th>
           <th class="short">IQ siswa </th>
          <th class="normal">: <?php echo $list->iq_siswa ;?></th>
        </tr>
         <tr>
          <th class="short">Telepon Kost </th>
          <th class="normal">: <?php echo $list->telp_kost ;?></th>
           <th class="short">IQ tanggal </th>
          <th class="normal">: <?php echo $list->iq_tanggal ;?></th>
        </tr>
         <tr>
          <th class="short">Alamat Rumah </th>
          <th class="normal">: <?php echo $list->alamat_rumah ;?></th>
           <th class="short">Prestasi </th>
          <th class="normal">: <?php echo $list->prestasi ;?></th>
        </tr>
         <tr>
          <th class="short">Alamat Kost </th>
          <th class="normal">: <?php echo $list->alamat_kost ;?></th>
           <th class="short">Prestasi 2 </th>
          <th class="normal">: <?php echo $list->prestasi_2 ;?></th>
        </tr>
         <tr>
          <th class="short">Gol Darah </th>
          <th class="normal">: <?php echo $list->gol_darah ;?></th>
        </tr>
         <tr>
          <th class="short">Jenis Kelamin </th>
          <th class="normal">: <?php echo $list->jkel==1 ? 'laki laki' : 'wanita' ;?></th>
        </tr>
         <tr>
          <th class="short">Tinggi Badan </th>
          <th class="normal">: <?php echo $list->tinggi_badan ;?></th>
        </tr>
         <tr>
          <th class="short">Berat Badan </th>
          <th class="normal">: <?php echo $list->berat_badan ;?></th>
        </tr>
         <tr>
          <th class="short">Agama </th>
          <th class="normal">: 
          <?php 
            if($list->agama==1){
            echo 'Islam';
            }else if($list->agama==2){
            echo 'katolik';
            }else if($list->agama==3){
            echo 'Protestan';
            }else if($list->agama==4){
            echo 'Hindu';
            }else if($list->agama==5){
            echo 'Budha';
            }else{
            echo 'Konghuchu';
            }
          ;?>

            
          </th>
        </tr>
         <tr>
          <th class="short">Anak ke </th>
          <th class="normal">: <?php echo $list->anak_ke ;?></th>
        </tr>
         <tr>
          <th class="short">Jumlah Saudara </th>
          <th class="normal">: <?php echo $list->jumlah_saudara ;?></th>
        </tr>
         <tr>
          <th class="short">Hobby </th>
          <th class="normal">: <?php echo $list->hobby ;?></th>
        </tr>
         <tr>
          <th class="short">Riwayat sakit </th>
          <th class="normal">: <?php echo $list->riwayat_sakit ;?></th>
        </tr>
         <tr>
          <th class="short">Tinggal dengan </th>
          <th class="normal">: <?php echo $list->tinggal_dengan ;?></th>
        </tr>

      </tbody>
    </table>
    <?php };?>
   </div>
</body>
</html>