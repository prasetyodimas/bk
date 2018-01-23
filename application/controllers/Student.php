<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	 public function __construct()
       {
            parent::__construct();
            //$this->load->library('PHPExcel');
            $this->load->library('PHPExcel/IOFactory');
            if($this->session->userdata('login')!='TRUE'){
           	redirect('auth');
           };
            $this->load->helper(array('form', 'url'));

            $this->load->model('student_model');
            $this->load->model('school_model');
            $this->load->model('auth_model');	
       }

  
  public function pdf(){
        $id=$this->uri->segment(3);
        $data_siswa=$this->student_model->edit($id);
        $data_sekolah=$this->school_model->show();
        
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_siswa'=>$data_siswa,
            'data_sekolah'=>$data_sekolah
        );
         
        $html=$this->load->view('dashboard/student/print',$data,true);
        
        $this->pdfgenerator->generate($html,'contoh');
  }

  public function export()
  {
    $heading=array('no','NIS','nama','nama_pangilan','tempat_lahir','tanggal_lahir','telp_rumah','hp','alamat_rumah','gol_darah','tinggi_badan','jkel','agama','anak_ke','jumlah_saudara','hobby','thn_pelajaran','kelas','jurusan','nama_orangtua');
    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getActiveSheet()->setTitle("test");
    $startCol='A';
    $startRow=1;
    foreach($heading as $h){
      $objPHPExcel->getActiveSheet()->setCellValue($startCol.$startRow,$h);
        $startCol++;
    }
    $data=$this->student_model->show();
    $no=1;
    $row=2;
    foreach($data as $list){
        $objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$no);
        $objPHPExcel->getActiveSheet()->setCellValue('B'.$row,$list->nis);
        $objPHPExcel->getActiveSheet()->setCellValue('C'.$row,$list->nama);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$row,$list->nama_pangilan);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$row,$list->tempat_lahir);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$row,$list->tanggal_lahir);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$row,$list->telp_rumah);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$row,$list->hp);
        $objPHPExcel->getActiveSheet()->setCellValue('I'.$row,$list->alamat_rumah);
        $objPHPExcel->getActiveSheet()->setCellValue('J'.$row,$list->gol_darah);
        $objPHPExcel->getActiveSheet()->setCellValue('K'.$row,$list->tinggi_badan);
        $objPHPExcel->getActiveSheet()->setCellValue('L'.$row,$list->berat_badan);
		$objPHPExcel->getActiveSheet()->setCellValue('M'.$row,$list->jkel);
        $objPHPExcel->getActiveSheet()->setCellValue('N'.$row,$list->agama);
        $objPHPExcel->getActiveSheet()->setCellValue('O'.$row,$list->anak_ke);
        $objPHPExcel->getActiveSheet()->setCellValue('P'.$row,$list->jumlah_saudara);
        $objPHPExcel->getActiveSheet()->setCellValue('Q'.$row,$list->hobby);
        $objPHPExcel->getActiveSheet()->setCellValue('R'.$row,$list->thn_pelajaran);
        $objPHPExcel->getActiveSheet()->setCellValue('S'.$row,$list->kelas);
        $objPHPExcel->getActiveSheet()->setCellValue('T'.$row,$list->jurusan);
        $row++;
        $no++;
    }

    $objWriter = IOFactory::createWriter($objPHPExcel,'Excel5');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="export.xls"');
    header('Cache-Control: max-age=0');
    $objWriter->save('php://output');
    exit();
  }

   public function import()
   {
    $data=array(
        'title'=>'sistem bimbingan konsultasi sekolah',
        'data'=>$this->student_model->show()
        );  
   	$this->load->view('dashboard/student/import',$data);
   }
       
   public function dataUpload(){
   	    $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './public/excel';
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();           
        $inputFileName = './public/excel/'.$fileName;
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objReader->setReadDataOnly(true);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestDataRow();
            $highestColumn = $sheet->getHighestDataColumn();


            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database    
                 $data = array(
            'nis'=>$rowData[0][0],
            'nama'=>$rowData[0][1],
            'nama_pangilan'=>$rowData[0][2],
            'tempat_lahir'=>$rowData[0][3],
            'tanggal_lahir'=>date("Y-m-d", strtotime()),
            'telp_rumah'=>$rowData[0][5],
            'hp'=>$rowData[0][6],
            'alamat_rumah'=>$rowData[0][7],
            'gol_darah'=>$rowData[0][8],
            'tinggi_badan'=>$rowData[0][9],
            'berat_badan'=>$rowData[0][10],
            'jkel'=>$rowData[0][11],			
            'agama'=>$rowData[0][12],
            'anak_ke'=>$rowData[0][13],
            'jumlah_saudara'=>$rowData[0][14],
            'hobby'=>$rowData[0][15],
            'thn_pelajaran'=>$rowData[0][16],
            'kelas'=>$rowData[0][17],
            'jurusan'=>$rowData[0][18],
                );
               $data_user=array(
        'username'=>$rowData[0][0],
        'password'=>md5($rowData[0][4]) 
        );    
         $query=$this->student_model->register($data);
         $query_user=$this->auth_model->register($data_user);
            }
            unlink($inputFileName);
        if($query && $query_user){
            $success ="data telah berhasil ditambahkan";
            $this->session->set_flashdata('success',$success);
            redirect('student');
        }
   }

   public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->student_model->show()
		);	
		$this->load->view('dashboard/student/index',$data);
	}    

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah'
		);	
		$this->load->view('dashboard/student/add',$data);
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->student_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('student');
		}else{
			$error ="data telah gagal dibahpus";
            $this->session->set_flashdata('error',$error);
            redirect('student');
		}
		
	}

	public function restore()
    {
        $id=$this->uri->segment(3);
        $query=$this->student_model->restore($id);
        if($query){
            $success ="data telah berhasil direstore";
            $this->session->set_flashdata('success',$success);
            redirect('student');
        }else{
            $error ="data telah gagal direstore";
            $this->session->set_flashdata('error',$error);
            redirect('student');
        }
        
    }


	public function edit()
	{
		$id=$this->uri->segment(3);
		$query=$this->student_model->edit($id);
		$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$query
		);
		$this->load->view('dashboard/student/edit',$data);

	}

	public function detail()
	{
		$id=$this->uri->segment(3);
		$query=$this->student_model->edit($id);
		$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$query
		);
		$this->load->view('dashboard/student/detail',$data);

	}



	public function register()
	{
		/* upload part */
		$config['upload_path'] ='./public/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name']=date('Ymdhms').".jpg";
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('photo'))
        {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error',$error);
            redirect('student');
        }
        else
        {
            $path="public/upload/".$config['file_name'];
        }

        /* get all data*/
        $data_post = $this->input->post();
      	
      	/* test is password is note simillar */
        if($data_post['password']!==$data_post['password2']){
        	$error ="password tidak sama, silahkan ulangi lagi";
            $this->session->set_flashdata('error',$error);
            redirect('student');
        };

        $data_user=array(
        'username'=>$data_post['nis'],
        'password'=>md5($data_post['password'])	
        );

        $data=array(
        	'nis'=>$data_post['nis'],
		    'nama'=>$data_post['nama'],  
		    'photo'=>$path,
		    'nama_pangilan'=>$data_post['nama_pangilan'],  
		    'tempat_lahir'=>$data_post['tempat_lahir'],  
		    'tanggal_lahir'=>$data_post['tanggal_lahir'],  
		    'telp_rumah'=>$data_post['telp_rumah'],  
		    'hp'=>$data_post['hp'],  
		    'alamat_rumah'=>$data_post['alamat_rumah'],  
		    'gol_darah'=>$data_post['gol_darah'],  
		    'tinggi_badan'=>$data_post['tinggi_badan'],  
		    'berat_badan'=>$data_post['berat_badan'],
		    'jkel'=>$data_post['jkel'], 			
		    'agama'=>$data_post['agama'],  
		    'anak_ke'=>$data_post['anak_ke'],  
		    'jumlah_saudara'=>$data_post['jumlah_saudara'],
		    'hobby'=>$data_post['hobby'],
		    'thn_pelajaran'=>$data_post['thn_pelajaran'],  
		    'kelas'=>$data_post['kelas'],  
		    'jurusan'=>$data_post['jurusan'],  
		    'status'=>0  
        );
        $query=$this->student_model->register($data);
        $query_user=$this->auth_model->register($data_user);

        if($query && $query_user){
    	 	$success ="data telah berhasil ditambahkan";
            $this->session->set_flashdata('success',$success);
            redirect('student');
        }
	}

	public function update()
	{
		/* upload part */
		
		/* get all data*/
        $data_post = $this->input->post();
        //print_r($data_post);
        //die();
        $id=$data_post['id_student'];
		$config['upload_path'] ='./public/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = TRUE;
        $config['file_name']=date('Ymdhms').".jpg";
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('photo'))
        {
           $path=$data_post['old_photo'];
        }
        else
        {
        	unlink($data_post['old_photo']); 
            $path="public/upload/".$config['file_name'];
        }

        $data=array(
        	'nis'=>$data_post['nis'],
		    'nama'=>$data_post['nama'],  
		    'photo'=>$path,
		     'nama_pangilan'=>$data_post['nama_pangilan'],  
		    'tempat_lahir'=>$data_post['tempat_lahir'],  
		    'tanggal_lahir'=>$data_post['tanggal_lahir'],  
		    'telp_rumah'=>$data_post['telp_rumah'],  
		    'hp'=>$data_post['hp'],  
		    'alamat_rumah'=>$data_post['alamat_rumah'],  
		    'gol_darah'=>$data_post['gol_darah'],  
		    'tinggi_badan'=>$data_post['tinggi_badan'],  
		    'berat_badan'=>$data_post['berat_badan'],
		    'jkel'=>$data_post['jkel'],				
		    'agama'=>$data_post['agama'],  
		    'anak_ke'=>$data_post['anak_ke'],  
		    'jumlah_saudara'=>$data_post['jumlah_saudara'],
		    'hobby'=>$data_post['hobby'],
		    'thn_pelajaran'=>$data_post['thn_pelajaran'],  
		    'kelas'=>$data_post['kelas'],  
		    'jurusan'=>$data_post['jurusan'], 
		    'status'=>0  
        );
        $query=$this->student_model->update($data,$id);
        if($query){
    	 	$success ="data telah berhasil diubah";
            $this->session->set_flashdata('success',$success);
            redirect('student');
        }else{
        	$error ="data gagal diubah";
            $this->session->set_flashdata('error',$error);
            redirect('student');
        }
	}


}

/* End of file Student.php */
/* Location: ./application/controllers/Student.php */