<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	 public function __construct()
       {
            parent::__construct();
            if($this->session->userdata('login')!='TRUE'){
           	redirect('auth');
           };
           	$this->load->helper(array('form', 'url'));
            $this->load->model('school_model');
       }

       public function index()
		{
			$query=$this->school_model->show();
			$check=$this->school_model->check();
			$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$query,
			'check'=>$check
			);	
			$this->load->view('dashboard/school/index',$data);
		}

		public function register()
		{
			$config['upload_path'] ='./public/upload/logo';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['overwrite'] = TRUE;
	        $this->load->library('upload', $config);

	        $filename=array();
	        foreach ($_FILES as $fieldname => $fileObject)
				{
					if (!empty($fileObject['name']))
				    {
				        $this->upload->initialize($config);
				        if (!$this->upload->do_upload($fieldname))
				        {
				            $errors = $this->upload->display_errors();
				            echo $errors;
				        }
				        else
				        {
				        	$upload_data = $this->upload->data(); 
							array_push($filename,$upload_data['file_name']);
				        }
				    }
				}

			 $data_post = $this->input->post();

	         $data=array(
	         	'kop_surat1'=>$data_post['kop_surat1'],
	         	'kop_surat2'=>$data_post['kop_surat2'],
	         	'nama'=>$data_post['nama'],
	         	'alamat'=>$data_post['alamat'],
	         	'telp'=>$data_post['telp'],
	         	'fax'=>$data_post['fax'],
	         	'situs'=>$data_post['situs'],
	         	'email'=>$data_post['email'],
	         	'kepsek'=>$data_post['kepsek'],
	         	'nip'=>$data_post['nip'],
	         	'kota'=>$data_post['kota'],
	         	'provinsi'=>$data_post['provinsi'],
	         	'logo_sekolah'=>'public/upload/logo/'.$filename[0],
	         	'logo_kabupaten'=>'public/upload/logo/'.$filename[1]	
	         );
	         $query=$this->school_model->register($data);
	         if($query){
	         		$success ="data telah berhasil ditambahkan";
		            $this->session->set_flashdata('success',$success);
		            redirect('school');
	         }else{
	         		$error ="gagal masuk data";
		            $this->session->set_flashdata('success',$error);
		            redirect('school');
	         }
	         
		}

		public function update()
		{
			$config['upload_path'] ='./public/upload/logo';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['overwrite'] = TRUE;
	        $this->load->library('upload', $config);
	        $data_post = $this->input->post();
	        $id_sekolah=$data_post['id_sekolah'];
	        $filename=array();
	        foreach ($_FILES as $fieldname => $fileObject)
				{
					if (!empty($fileObject['name']))
				    {
				        $this->upload->initialize($config);
				        if (!$this->upload->do_upload($fieldname))
				        {
				           $errors = $this->upload->display_errors();
				            echo $errors;
				        }
				        else
				        {
				        	$upload_data = $this->upload->data(); 
							array_push($filename,$upload_data['file_name']);
					    }
				    }else{
				    	  array_push($filename,"empty");
				    }
				}

				if($filename[0]=='empty'){
					    $path_sekolah=$data_post['old_logo_sekolah'];
				}else{
					$path_sekolah='public/upload/logo/'.$filename[0];
				}

				if($filename[1]=='empty'){
					    $path_kabupaten=$data_post['old_logo_kabupaten'];
				}else{
					$path_kabupaten='public/upload/logo/'.$filename[1];
				}

	         $data=array(
	         	'kop_surat1'=>$data_post['kop_surat1'],
	         	'kop_surat2'=>$data_post['kop_surat2'],
	         	'nama'=>$data_post['nama'],
	         	'alamat'=>$data_post['alamat'],
	         	'telp'=>$data_post['telp'],
	         	'fax'=>$data_post['fax'],
	         	'situs'=>$data_post['situs'],
	         	'email'=>$data_post['email'],
	         	'kepsek'=>$data_post['kepsek'],
	         	'nip'=>$data_post['nip'],
	         	'kota'=>$data_post['kota'],
	         	'provinsi'=>$data_post['provinsi'],
	         	'logo_sekolah'=>$path_sekolah,
	         	'logo_kabupaten'=>$path_kabupaten	
	         );
	        
	         $query=$this->school_model->update($data,$id_sekolah);
	         if($query){
	         		$success ="data telah berhasil diubah";
		            $this->session->set_flashdata('success',$success);
		            redirect('school');
	         }else{
	         		$error ="gagal masuk data";
		            $this->session->set_flashdata('success',$error);
		            redirect('school');
	         }
	         
		}

}

/* End of file School.php */
/* Location: ./application/controllers/School.php */