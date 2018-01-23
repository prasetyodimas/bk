<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonselingIndividu extends CI_Controller {
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
		        $this->load->model('KonselingIndividu_model');
		   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->KonselingIndividu_model->show()
		);	
		$this->load->view('dashboard/konseling-individu/index',$data);	
	}

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->KonselingIndividu_model->show()
		);	
		$this->load->view('dashboard/konseling-individu/add',$data);		
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=> $this->KonselingIndividu_model->edit($id)
		);	
		$this->load->view('dashboard/konseling-individu/edit',$data);
	}

	 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->KonselingIndividu_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'konseling_individu'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/konseling-individu/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }


	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=> $this->KonselingIndividu_model->edit($id)
		);	
		$this->load->view('dashboard/konseling-individu/detail',$data);
	}


	public function save()
	{
		$data_post = $this->input->post();
		// echo "<pre>";print_r($data_post);die;

		$data=array(
			'tanggal_pelayanan'=>$data_post['tanggal_pelayanan'],
			'pertemuan_ke'=>$data_post['pertemuan_ke'],
			'format'=>$data_post['format'],
			'klasifikasi_umum'=>$data_post['klasifikasi_umum'],
			'belajar'=>$data_post['belajar'],
			'deskrpisi_masalah'=>$data_post['deskrpisi_masalah'],
			'diagnosa1'=>$data_post['diagnosa1'],
			'diagnosa2'=>$data_post['diagnosa2'],
			'diagnosa3'=>$data_post['diagnosa3'],
			'prognosa1'=>$data_post['prognosa1'],
			'prognosa2'=>$data_post['prognosa2'],
			'prognosa3'=>$data_post['prognosa3'],
			'tahap'=>$data_post['tahap'],
			'treatment'=>$data_post['treatment'],
			'teknis'=>$data_post['teknis'],
			'understanding'=>$data_post['understanding'],
			'comfort'=>$data_post['comfort'],
			'action'=>$data_post['action'],
			'tindak_lanjut'=>$data_post['tindak_lanjut'],
			'id_student'=>$data_post['id_student']		
		);
		$query=$this->KonselingIndividu_model->register($data);
			 if($query){
				$success ="data telah berhasil tambah";
	            $this->session->set_flashdata('success',$success);
	            redirect('KonselingIndividu');
			}else{
				$error ="data gagal tambah";
	            $this->session->set_flashdata('error',$error);
	            redirect('KonselingIndividu/add');
			}
	}

	public function update()
	{
		$data_post = $this->input->post();
		// echo "<pre>";print_r($data_post);die;

		$data=array(
			'tanggal_pelayanan'=>$data_post['tanggal_pelayanan'],
			'pertemuan_ke'=>$data_post['pertemuan_ke'],
			'format'=>$data_post['format'],
			'klasifikasi_umum'=>$data_post['klasifikasi_umum'],
			'belajar'=>$data_post['belajar'],
			'deskrpisi_masalah'=>$data_post['deskrpisi_masalah'],
			'diagnosa1'=>$data_post['diagnosa1'],
			'diagnosa2'=>$data_post['diagnosa2'],
			'diagnosa3'=>$data_post['diagnosa3'],
			'prognosa1'=>$data_post['prognosa1'],
			'prognosa2'=>$data_post['prognosa2'],
			'prognosa3'=>$data_post['prognosa3'],
			'tahap'=>$data_post['tahap'],
			'treatment'=>$data_post['treatment'],
			'teknis'=>$data_post['teknis'],
			'understanding'=>$data_post['understanding'],
			'comfort'=>$data_post['comfort'],
			'action'=>$data_post['action'],
			'tindak_lanjut'=>$data_post['tindak_lanjut'],
			'id_student'=>$data_post['id_student']		
		);
		$query=$this->KonselingIndividu_model->update($data,$data_post['id_konseling_individu']);
			 if($query){
				$success ="data telah berhasil diubah";
	            $this->session->set_flashdata('success',$success);
	            redirect('KonselingIndividu');
			}else{
				$error ="data gagal diubah";
	            $this->session->set_flashdata('error',$error);
	            redirect('KonselingIndividu');
			}	
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->KonselingIndividu_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('KonselingIndividu');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('KonselingIndividu');
		}
		
	}


}

/* End of file KonselingIndividu.php */
/* Location: ./application/controllers/KonselingIndividu.php */