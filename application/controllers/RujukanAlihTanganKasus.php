<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RujukanAlihTanganKasus extends CI_Controller {
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
	        $this->load->model('visit_model');
	        $this->load->model('KartuPanggilan_model');
	        $this->load->model('SatkungAlihTanganKasus_model');
	        $this->load->model('RujukanAlihTanganKasus_model');
	   }
	   
	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->RujukanAlihTanganKasus_model->show()
		);	
		$this->load->view('dashboard/rujukan-alih-tangan/index',$data);	
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->RujukanAlihTanganKasus_model->edit($id)
		);	
		$this->load->view('dashboard/rujukan-alih-tangan/edit',$data);
	}

	public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->RujukanAlihTanganKasus_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'rujukan_alih_tangan_kasus'=>$query,
            'data_sekolah'=>$data_sekolah
        );
         $html=$this->load->view('dashboard/rujukan-alih-tangan/print',$data,TRUE);
        $this->pdfgenerator->generate($html,'contoh');
  }


	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->RujukanAlihTanganKasus_model->edit($id)
		);	
		$this->load->view('dashboard/rujukan-alih-tangan/detail',$data);
	}




		public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/rujukan-alih-tangan/add',$data);	
	}

	public function save()
	{
		$data_post=$this->input->post();
		// print_r($data_post);
		// die();

		$data=array(
		'no_surat'=>$data_post['no_surat'],
		'perihal'=>$data_post['perihal'],
		'pekerjaan'=>$data_post['pekerjaan'],
		'masalah'=>$data_post['masalah'],
		'hasil_konseling'=>$data_post['hasil_konseling'],
		'catatan_khusus'=>$data_post['catatan_khusus'],
		'yang_diundang'=>$data_post['yang_diundang'],
		'jabatan'=>$data_post['jabatan'],
		'di'=>$data_post['di'],
		'id_student'=>$data_post['id_student']	
		);

		  $query=$this->RujukanAlihTanganKasus_model->register($data);
			 if($query){
				$success ="data telah berhasil tambah";
	            $this->session->set_flashdata('success',$success);
	            redirect('RujukanAlihTanganKasus');
			}else{
				$error ="data gagal tambah";
	            $this->session->set_flashdata('error',$error);
	            redirect('RujukanAlihTanganKasus/add');
			}
	}

	public function update()
	{
		$data_post=$this->input->post();
		// print_r($data_post);
		// die;

		$data=array(
		'no_surat'=>$data_post['no_surat'],
		'perihal'=>$data_post['perihal'],
		'pekerjaan'=>$data_post['pekerjaan'],
		'masalah'=>$data_post['masalah'],
		'hasil_konseling'=>$data_post['hasil_konseling'],
		'catatan_khusus'=>$data_post['catatan_khusus'],
		'yang_diundang'=>$data_post['yang_diundang'],
		'jabatan'=>$data_post['jabatan'],
		'di'=>$data_post['di'],
		'id_student'=>$data_post['id_student']	
		);


		  $query=$this->RujukanAlihTanganKasus_model->update($data,$data_post['id_rujukan_alih_tangan_kasus']);
			 if($query){
				$success ="data telah berhasil diubah";
	            $this->session->set_flashdata('success',$success);
	            redirect('RujukanAlihTanganKasus');
			}else{
				$error ="data gagal diubah";
	            $this->session->set_flashdata('error',$error);
	            redirect('RujukanAlihTanganKasus');
			}


	}

}

/* End of file RujukanAlihTanganKasus.php */
/* Location: ./application/controllers/RujukanAlihTanganKasus.php */