<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	 public function __construct()
       {
       		parent::__construct();
       		$this->load->model('auth_model');
            
       }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'failed'=>FALSE	
		);
		$this->load->view('auth/login', $data, FALSE);	
	}

	public function profile()
	{
		$id_user=$this->session->userdata('id_user');
		$data=$this->auth_model->show($id_user);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$data
		);
		$this->load->view('auth/profile', $data);	
	}

	public function change()
	{
		$data_post = $this->input->post();
		if($data_post['password']!==$data_post['password2']){
			$error ="password tidak sama";
            $this->session->set_flashdata('error',$error);
            redirect('auth/profile');
		}else{
			$data=array(
			'password'=>md5($data_post['password'])	
			);
			$query=$this->auth_model->update($data,$data_post['id_user']);
			if($query){
			$success ="password berhasil diubah";
            $this->session->set_flashdata('success',$success);
            redirect('auth/profile');	
			}else{
			$error ="password gagal dirubah";
            $this->session->set_flashdata('error',$success);
            redirect('auth/profile');	
			}
		}
	}



	public function failed()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'failed'=>TRUE	
		);
		$this->load->view('auth/login', $data);	
	}

	public function login()
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$query=$this->auth_model->login($username,$password);
		if($query){
			redirect('dashboard','refresh');
		}else{
			redirect('auth/failed');
		}

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */