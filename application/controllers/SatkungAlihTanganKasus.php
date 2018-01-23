<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SatkungAlihTanganKasus extends CI_Controller {
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
	   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->SatkungAlihTanganKasus_model->show()
		);	
		$this->load->view('dashboard/alih-tangan-kasus/index',$data);	
	}


		public function add()
		{
			$data=array(
				'title'=>'sistem bimbingan konsultasi sekolah',
				);	
				$this->load->view('dashboard/alih-tangan-kasus/add',$data);
		}

		public function edit()
		{
			$id=$this->uri->segment(3);
			$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$this->SatkungAlihTanganKasus_model->edit($id)
			);	
			$this->load->view('dashboard/alih-tangan-kasus/edit',$data);
		}

		 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->SatkungAlihTanganKasus_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'satkung_alih_tangan_kasus'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/alih-tangan-kasus/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }



		public function detail()
		{
			$id=$this->uri->segment(3);
			$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$this->SatkungAlihTanganKasus_model->edit($id)
			);	
			$this->load->view('dashboard/alih-tangan-kasus/detail',$data);
		}

		public function update()
		{
			$data_post=$this->input->post();
			$data=array(
				'topik'=>$data_post['topik'],
				'bidang_bimbingan'=>$data_post['bidang_bimbingan'],
				'jenis_kegiatan'=>$data_post['jenis_kegiatan'],
				'fungsi_kegiatan'=>$data_post['fungsi_kegiatan'],
				'tujuan_kegiatan'=>$data_post['tujuan_kegiatan'],
				'hasil'=>$data_post['hasil'],
				'subjek'=>$data_post['subjek'],
				'ringkas'=>$data_post['ringkas'],
				'kepada'=>$data_post['kepada'],
				'alasan'=>$data_post['alasan'],
				'kapan'=>$data_post['kapan'],
				'bahan'=>$data_post['bahan'],
				'pendukung'=>$data_post['pendukung'],
				'tindak_lanjut'=>$data_post['tindak_lanjut'],
				'catatan_khusus'=>$data_post['catatan_khusus'],
				'id_student'=>$data_post['id_student']
			);
			  $query=$this->SatkungAlihTanganKasus_model->update($data,$data_post['id_satkung_alih_tangan_kasus']);
			 if($query){
				$success ="data telah berhasil ubah";
	            $this->session->set_flashdata('success',$success);
	            redirect('SatkungAlihTanganKasus');
			}else{
				$error ="data gagal ubah";
	            $this->session->set_flashdata('error',$error);
	            redirect('SatkungAlihTanganKasus');
			}
		}


		public function save()
		{
			$data_post=$this->input->post();
			// print_r($data_post);
			// die();

			$data=array(
				'topik'=>$data_post['topik'],
				'bidang_bimbingan'=>$data_post['bidang_bimbingan'],
				'jenis_kegiatan'=>$data_post['jenis_kegiatan'],
				'fungsi_kegiatan'=>$data_post['fungsi_kegiatan'],
				'tujuan_kegiatan'=>$data_post['tujuan_kegiatan'],
				'hasil'=>$data_post['hasil'],
				'subjek'=>$data_post['subjek'],
				'ringkas'=>$data_post['ringkas'],
				'kepada'=>$data_post['kepada'],
				'alasan'=>$data_post['alasan'],
				'kapan'=>$data_post['kapan'],
				'bahan'=>$data_post['bahan'],
				'pendukung'=>$data_post['pendukung'],
				'tindak_lanjut'=>$data_post['tindak_lanjut'],
				'catatan_khusus'=>$data_post['catatan_khusus'],
				'id_student'=>$data_post['id_student']
			);
			  $query=$this->SatkungAlihTanganKasus_model->register($data);
			 if($query){
				$success ="data telah berhasil tambah";
	            $this->session->set_flashdata('success',$success);
	            redirect('SatkungAlihTanganKasus');
			}else{
				$error ="data gagal tambah";
	            $this->session->set_flashdata('error',$error);
	            redirect('SatkungAlihTanganKasus/add');
			}
		}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->SatkungAlihTanganKasus_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('SatkungAlihTanganKasus');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('SatkungAlihTanganKasus');
		}
		
	}


}

/* End of file SatkungAlihTanganKasus.php */
/* Location: ./application/controllers/SatkungAlihTanganKasus.php */