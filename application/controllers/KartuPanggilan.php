<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KartuPanggilan extends CI_Controller {
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
	   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->KartuPanggilan_model->show()
		);	
		$this->load->view('dashboard/kartu-panggilan/index',$data);			
	}

	 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->KartuPanggilan_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_kartu'=>$query,
            'data_sekolah'=>$data_sekolah
        );
         // if($id=='all'){
         // $html=$this->load->view('dashboard/kartu-panggilan/print',$data,true);
         // }else{
         $html=$this->load->view('dashboard/kartu-panggilan/print',$data,true);
        // }
        $this->pdfgenerator->generate($html,'contoh');
  }

  public function printRekap()
  {
  		$query=$this->KartuPanggilan_model->show();
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_kartu'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/kartu-panggilan/print-rekap',$data,true);
         $this->pdfgenerator->generate($html,'contoh');
  }

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->KartuPanggilan_model->show()
		);	
		$this->load->view('dashboard/kartu-panggilan/add',$data);	
	}

	public function save()
	{
		 $data_post = $this->input->post();
		//print_r($data_post);
		 $data=array(
		 'jam_ke'=>$data_post['jam_ke'],
		 'ruang'=>$data_post['ruang'],
		 'menghadap'=>$data_post['menghadap'],
		 'perihal'=>$data_post['perihal'],
		 'id_student'=>$data_post['id_student'],
		 'date'=>$data_post['date']	
		 );
		 $query=$this->KartuPanggilan_model->register($data);
		 if($query){
			$success ="data telah berhasil tambah";
            $this->session->set_flashdata('success',$success);
            redirect('KartuPanggilan');
		}else{
			$error ="data gagal tambah";
            $this->session->set_flashdata('error',$error);
            redirect('KartuPanggilan/add');
		}
	}


	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->KartuPanggilan_model->edit($id)
		);	
		$this->load->view('dashboard/kartu-panggilan/edit',$data);
	}
	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->KartuPanggilan_model->edit($id)
		);	
		$this->load->view('dashboard/kartu-panggilan/detail',$data);
	}


	public function update()
	{
	 	$data_post = $this->input->post();
		$data=array(
		 'jam_ke'=>$data_post['jam_ke'],
		 'ruang'=>$data_post['ruang'],
		 'menghadap'=>$data_post['menghadap'],
		 'perihal'=>$data_post['perihal'],
		 'id_student'=>$data_post['id_student'],
		 'date'=>$data_post['date']		
		 );

		$query=$this->KartuPanggilan_model->update($data,$data_post['id_kartu_panggilan']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('KartuPanggilan');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('KartuPanggilan');
        }
	}


	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->KartuPanggilan_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('KartuPanggilan');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('KartuPanggilan');
		}
		
	}



}

/* End of file KartuPanggilan.php */
/* Location: ./application/controllers/KartuPanggilan.php */