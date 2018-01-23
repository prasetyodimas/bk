<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratUndanganOrangTua extends CI_Controller {
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
        $this->load->model('DataKonsultasi_model');
        $this->load->model('SuratUndanganOrangTua_model');
   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->SuratUndanganOrangTua_model->show()
		);	
		$this->load->view('dashboard/undangan-ortu/index',$data);	
	}

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/undangan-ortu/add',$data);	
	}

  public function save()
  {
     $data_post = $this->input->post();
     $data=array(
      'no_surat'=>$data_post['no_surat'],
      'perihal'=>$data_post['perihal'],
      'orang_tua'=>$data_post['orang_tua'],
      'di'=>$data_post['di'],
      'tanggal'=>$data_post['tanggal'],
      'waktu'=>$data_post['waktu'],
      'tempat'=>$data_post['tempat'],
      'keperluan'=>$data_post['keperluan'],
      'id_student'=>$data_post['id_student']
    );
    
    $query=$this->SuratUndanganOrangTua_model->register($data);
       if($query){
        $success ="data telah berhasil tambah";
              $this->session->set_flashdata('success',$success);
              redirect('SuratUndanganOrangTua');
      }else{
        $error ="data gagal tambah";
              $this->session->set_flashdata('error',$error);
              redirect('SuratUndanganOrangTua/add');
      }

  }

  public function edit()
  {
    $id=$this->uri->segment(3);
    $data=array(
    'title'=>'sistem bimbingan konsultasi sekolah',
    'data'=>$this->SuratUndanganOrangTua_model->edit($id)
    );  
    $this->load->view('dashboard/undangan-ortu/edit',$data);
  }

  public function pdf(){
    $id=$this->uri->segment(3);
        $query=$this->SuratUndanganOrangTua_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'undangan_ortu'=>$query,
            'data_sekolah'=>$data_sekolah
        );
       
         $html=$this->load->view('dashboard/undangan-ortu/print',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
  }

   public function detail()
  {
    $id=$this->uri->segment(3);
    $data=array(
    'title'=>'sistem bimbingan konsultasi sekolah',
    'data'=>$this->SuratUndanganOrangTua_model->edit($id)
    );  
    $this->load->view('dashboard/undangan-ortu/detail',$data);
  }

  public function update()
  {
   $data_post = $this->input->post();
     $data=array(
      'no_surat'=>$data_post['no_surat'],
      'perihal'=>$data_post['perihal'],
      'orang_tua'=>$data_post['orang_tua'],
      'di'=>$data_post['di'],
      'tanggal'=>$data_post['tanggal'],
      'waktu'=>$data_post['waktu'],
      'tempat'=>$data_post['tempat'],
      'keperluan'=>$data_post['keperluan'],
      'id_student'=>$data_post['id_student']
    );
    
    $query=$this->SuratUndanganOrangTua_model->update($data,$data_post['id_undangan_orang_tua']);
       if($query){
        $success ="data telah berhasil diubah";
              $this->session->set_flashdata('success',$success);
              redirect('SuratUndanganOrangTua');
      }else{
        $error ="data gagal tambah";
              $this->session->set_flashdata('error',$error);
              redirect('SuratUndanganOrangTua');
      } 
  }


    public function delete()
  {
    $id=$this->uri->segment(3);
    $query=$this->SuratUndanganOrangTua_model->delete($id);
    if($query){
      $success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('SuratUndanganOrangTua');
    }else{
      $error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('SuratUndanganOrangTua');
    }
    
  }


}

/* End of file SuratUndanganOrangTua.php */
/* Location: ./application/controllers/SuratUndanganOrangTua.php */