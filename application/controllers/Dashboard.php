<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 public function __construct()
       {
            parent::__construct();
            if($this->session->userdata('login')!='TRUE'){
           	redirect('auth');
           };
           $this->load->model('orangtua_model');	
	        
       }
       
    public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function index()
	{
		// login untuk orang tua
		if($this->session->userdata('level')==2){
       		$username=$this->session->userdata('username');
       		$data=$this->orangtua_model->data($username);
       	
       		$id=$data[0]->id_student;
       		// die();
			redirect('orangtua/data/'.$id);
       	}else{
       		$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah'
			);	
			$this->load->view('dashboard/index',$data);
       	}

		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */