<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UndanganKonferensi extends CI_Controller {
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
        $this->load->model('UndanganKonferensi_model');

   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->UndanganKonferensi_model->show()
		);	
		$this->load->view('dashboard/undangan-konferensi/index',$data);
	}

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/undangan-konferensi/add',$data);	
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->UndanganKonferensi_model->edit($id)
		);	
		$this->load->view('dashboard/undangan-konferensi/edit',$data);
	}

	 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->UndanganKonferensi_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'undangan_konferensi'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/undangan-konferensi/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }


	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->UndanganKonferensi_model->edit($id)
		);	
		$this->load->view('dashboard/undangan-konferensi/detail',$data);
	}

	public function update()
	{
	 	$data_post = $this->input->post();
		 $data=array(
		'no_surat'=>$data_post['no_surat'],
		'perihal'=>$data_post['perihal'],
		'yang_diundang'=>$data_post['yang_diundang'],
		'di'=>$data_post['di'],
		'tanggal'=>$data_post['tanggal'],
		'waktu'=>$data_post['waktu'],
		'tempat'=>$data_post['tempat'],
		'keperluan'=>$data_post['keperluan']	
		);

		$query=$this->UndanganKonferensi_model->update($data,$data_post['id_undangan_konferensi']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('UndanganKonferensi');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('UndanganKonferensi');
        }
	}



	public function save()
	{
		$data_post = $this->input->post();
		$data=array(
		'no_surat'=>$data_post['no_surat'],
		'perihal'=>$data_post['perihal'],
		'yang_diundang'=>$data_post['yang_diundang'],
		'di'=>$data_post['di'],
		'tanggal'=>$data_post['tanggal'],
		'waktu'=>$data_post['waktu'],
		'tempat'=>$data_post['tempat'],
		'keperluan'=>$data_post['keperluan']	
		);
		$query=$this->UndanganKonferensi_model->register($data);
			 if($query){
				$success ="data telah berhasil tambah";
	            $this->session->set_flashdata('success',$success);
	            redirect('UndanganKonferensi');
			}else{
				$error ="data gagal tambah";
	            $this->session->set_flashdata('error',$error);
	            redirect('UndanganKonferensi/add');
			}
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->UndanganKonferensi_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('UndanganKonferensi');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('UndanganKonferensi');
		}
		
	}

}

/* End of file UndanganKonferensi.php */
/* Location: ./application/controllers/UndanganKonferensi.php */