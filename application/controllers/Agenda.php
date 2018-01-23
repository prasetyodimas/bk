<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
        //$this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        if($this->session->userdata('login')!='TRUE'){
       	redirect('auth');
       };
        $this->load->helper(array('form', 'url'));
    	$this->load->model('Agenda_model');

   }


	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->Agenda_model->show()
		);	
		$this->load->view('dashboard/agenda/index',$data);		
	}

	public function save()
	{
		$data_post=$this->input->post();
		$data=array(
		'tgl'=>$data_post['tgl'],
		'kegiatan'=>$data_post['kegiatan'],
		'keterangan'=>$data_post['keterangan']	
		);

		$query=$this->Agenda_model->register($data);
		if($query){
    	 	$success ="data telah berhasil di tambah";
            $this->session->set_flashdata('success',$success);
            redirect('Agenda');
        }else{
        	$error ="data gagal di tambah";
            $this->session->set_flashdata('error',$error);
            redirect('Agenda');
        }

	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->Agenda_model->edit($id)
		);	
		$this->load->view('dashboard/agenda/edit',$data);
	}

	public function update()
	{
		$data_post=$this->input->post();
		$data=array(
		'tgl'=>$data_post['tgl'],
		'kegiatan'=>$data_post['kegiatan'],
		'keterangan'=>$data_post['keterangan']	
		);

		$query=$this->Agenda_model->update($data,$data_post['id_agenda']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('Agenda');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('Agenda');
        }

	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->Agenda_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('Agenda');
		}else{
			$error ="data telah gagal dihapus";
            $this->session->set_flashdata('error',$error);
            redirect('Agenda');
		}
		
	}



	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/agenda/add',$data);		
	}

	public function register()
	{
		$data_post = $this->input->post();
		print_r($data_post);
	}

}

/* End of file Agenda.php */
/* Location: ./application/controllers/Agenda.php */