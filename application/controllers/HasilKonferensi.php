<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilKonferensi extends CI_Controller {
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
        $this->load->model('HasilKonferensi_model');

   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->HasilKonferensi_model->show()
		);	
		$this->load->view('dashboard/hasil-konferensi/index',$data);
	}

	 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->HasilKonferensi_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'hasil_konferensi'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/hasil-konferensi/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }


	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/hasil-konferensi/add',$data);	
	}

	public function save()
	{
		$data_post = $this->input->post();
		$data=array(
		'tanggal'=>$data_post['tanggal'],
		'deskripsi_kasus'=>$data_post['deskripsi_kasus'],
		'nama_1'=>$data_post['nama_1'],
		'jabatan_1'=>$data_post['jabatan_1'],
		'nama_2'=>$data_post['nama_2'],
		'jabatan_2'=>$data_post['jabatan_2'],
		'nama_3'=>$data_post['nama_3'],
		'jabatan_3'=>$data_post['jabatan_3'],
		'nama_4'=>$data_post['nama_4'],
		'jabatan_4'=>$data_post['jabatan_4'],
		'nama_5'=>$data_post['nama_5'],
		'jabatan_5'=>$data_post['jabatan_5'],
		'id_student'=>$data_post['id_student'],
		'hasil'=>$data_post['hasil'],
		'evaluasi'=>$data_post['evaluasi'],
		'catatan'=>$data_post['catatan']
		);
		  $query=$this->HasilKonferensi_model->register($data);
			 if($query){
				$success ="data telah berhasil tambah";
	            $this->session->set_flashdata('success',$success);
	            redirect('HasilKonferensi');
			}else{
				$error ="data gagal tambah";
	            $this->session->set_flashdata('error',$error);
	            redirect('HasilKonferensi/add');
			}
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->HasilKonferensi_model->edit($id)
		);	
		$this->load->view('dashboard/hasil-konferensi/edit',$data);
	}

		public function detail()
		{
			$id=$this->uri->segment(3);
			$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$this->HasilKonferensi_model->edit($id)
			);	
			$this->load->view('dashboard/hasil-konferensi/detail',$data);
		}

	public function update()
	{
		$data_post = $this->input->post();
		$data=array(
		'tanggal'=>$data_post['tanggal'],
		'deskripsi_kasus'=>$data_post['deskripsi_kasus'],
		'nama_1'=>$data_post['nama_1'],
		'jabatan_1'=>$data_post['jabatan_1'],
		'nama_2'=>$data_post['nama_2'],
		'jabatan_2'=>$data_post['jabatan_2'],
		'nama_3'=>$data_post['nama_3'],
		'jabatan_3'=>$data_post['jabatan_3'],
		'nama_4'=>$data_post['nama_4'],
		'jabatan_4'=>$data_post['jabatan_4'],
		'nama_5'=>$data_post['nama_5'],
		'jabatan_5'=>$data_post['jabatan_5'],
		'id_student'=>$data_post['id_student'],
		'hasil'=>$data_post['hasil'],
		'evaluasi'=>$data_post['evaluasi'],
		'catatan'=>$data_post['catatan']
		);
		  $query=$this->HasilKonferensi_model->update($data,$data_post['id_hasil_konferensi']);
			 if($query){
				$success ="data telah berhasil diubah";
	            $this->session->set_flashdata('success',$success);
	            redirect('HasilKonferensi');
			}else{
				$error ="data gagal diubah";
	            $this->session->set_flashdata('error',$error);
	            redirect('HasilKonferensi');
			}
	}



	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->HasilKonferensi_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('HasilKonferensi');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('HasilKonferensi');
		}
		
	}

}

/* End of file HasilKonferensi.php */
/* Location: ./application/controllers/HasilKonferensi.php */