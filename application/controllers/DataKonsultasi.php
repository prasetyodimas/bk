<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKonsultasi extends CI_Controller {
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
   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->DataKonsultasi_model->show()
		);	
		$this->load->view('dashboard/data-konsultasi/index',$data);		
	}

	 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->DataKonsultasi_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_konsultasi'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/data-konsultasi/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }


	 public function cetakRekap()
  {
  		$query=$this->DataKonsultasi_model->show();
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_konsultasi'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       

         $html=$this->load->view('dashboard/data-konsultasi/print-rekap',$data,true);
         $this->pdfgenerator->generate($html,'contoh');
  }


	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/data-konsultasi/add',$data);	
	}

	public function save()
	{
		 $data_post = $this->input->post();
		 $data=array(
		 'menghadap'=>$data_post['menghadap'],
		 'jam_ke'=>$data_post['jam_ke'],
		 'selesai_pukul'=>$data_post['selesai_pukul'],
		 'selesai_jam_ke'=>$data_post['selesai_jam'],
		 'id_student'=>$data_post['id_student']	
		 );

		  $query=$this->DataKonsultasi_model->register($data);
			 if($query){
				$success ="data telah berhasil tambah";
	            $this->session->set_flashdata('success',$success);
	            redirect('DataKonsultasi');
			}else{
				$error ="data gagal tambah";
	            $this->session->set_flashdata('error',$error);
	            redirect('DataKonsultasi/add');
			}

		 //print_r($data_post);
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->DataKonsultasi_model->edit($id)
		);	
		$this->load->view('dashboard/data-konsultasi/edit',$data);
	}

	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->DataKonsultasi_model->edit($id)
		);	
		$this->load->view('dashboard/data-konsultasi/detail',$data);
	}



	public function update()
	{
	 	$data_post = $this->input->post();
		 $data=array(
		 'menghadap'=>$data_post['menghadap'],
		 'jam_ke'=>$data_post['jam_ke'],
		 'selesai_pukul'=>$data_post['selesai_pukul'],
		 'selesai_jam_ke'=>$data_post['selesai_jam'],
		 'id_student'=>$data_post['id_student']	
		 );

		$query=$this->DataKonsultasi_model->update($data,$data_post['id_data_konsultasi']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('DataKonsultasi');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('DataKonsultasi');
        }
	}


	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->DataKonsultasi_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('DataKonsultasi');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('DataKonsultasi');
		}
		
	}

}

/* End of file DataKonsultasi.php */
/* Location: ./application/controllers/DataKonsultasi.php */