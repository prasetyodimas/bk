<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anekdot extends CI_Controller {
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
        $this->load->model('DataKonsultasi_model');
    	$this->load->model('Anekdot_model');

   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->Anekdot_model->show()
		);	
		$this->load->view('dashboard/anekdot/index',$data);		
	}

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/anekdot/add',$data);		
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->Anekdot_model->edit($id)
		);	
		$this->load->view('dashboard/anekdot/edit',$data);
	}

	public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->Anekdot_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'anekdot'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/anekdot/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }



	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->Anekdot_model->edit($id)
		);	
		$this->load->view('dashboard/anekdot/detail',$data);
	}


	public function save()
	{
		$data_post = $this->input->post();
		$data=array(
		'tgl_kejadian'=>$data_post['tgl_kejadian'],
		'tempat_kejadian'=>$data_post['tempat_kejadian'],
		'ket_kejadian'=>$data_post['ket_kejadian'],
		'tindak_lanjut'=>$data_post['tindak_lanjut'],
		'id_student'=>$data_post['id_student']	
		);

		$query=$this->Anekdot_model->register($data);
		if($query){
    	 	$success ="data telah berhasil di tambah";
            $this->session->set_flashdata('success',$success);
            redirect('Anekdot');
        }else{
        	$error ="data gagal di tambah";
            $this->session->set_flashdata('error',$error);
            redirect('Anekdot');
        }

	}

		public function update()
	{
		$data_post = $this->input->post();
		$data=array(
		'tgl_kejadian'=>$data_post['tgl_kejadian'],
		'tempat_kejadian'=>$data_post['tempat_kejadian'],
		'ket_kejadian'=>$data_post['ket_kejadian'],
		'tindak_lanjut'=>$data_post['tindak_lanjut'],
		'id_student'=>$data_post['id_student']	
		);

		$query=$this->Anekdot_model->update($data,$data_post['id_anekdot']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('Anekdot');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('Anekdot');
        }

	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->Anekdot_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('Anekdot');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('Anekdot');
		}
		
	}


}

/* End of file Anekdot.php */
/* Location: ./application/controllers/Anekdot.php */