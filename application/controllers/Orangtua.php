<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrangTua extends CI_Controller {

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
    $this->load->model('orangtua_model');	
    $this->load->model('KonselingIndividu_model');
 }

	public function index()
	{
		$data=array(
			'title'=>'sistem bimbingan konsultasi sekolah',
			'data'=>$this->orangtua_model->show()
		);	
		$this->load->view('dashboard/orangtua/index',$data);	
	}

	public function data(){
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=> $this->KonselingIndividu_model->data($id)
		);	
		// print_r($data);
		// die();
		$this->load->view('dashboard/orangtua/data_anak',$data);
	}

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'list_student'=>$this->student_model->show()
		);
		// print_r($data);
		// die();	
		$this->load->view('dashboard/orangtua/add',$data);

	}

	public function register()
	{
		/* upload part */
		// $config['upload_path'] ='./public/upload/';
  //       $config['allowed_types'] = 'gif|jpg|png';
  //       $config['overwrite'] = TRUE;
  //       $config['file_name']=date('Ymdhms').".jpg";
  //       $this->load->library('upload', $config);
  //       if ( ! $this->upload->do_upload('photo'))
  //       {
  //           $error = $this->upload->display_errors();
  //           $this->session->set_flashdata('error',$error);
  //           redirect('student');
  //       }
  //       else
  //       {
  //           $path="public/upload/".$config['file_name'];
  //       }

        /* get all data*/
        $data_post = $this->input->post();
      	
      	/* test is password is note simillar */
        if($data_post['password']!==$data_post['password2']){
        	  $error ="password tidak sama, silahkan ulangi lagi";
            $this->session->set_flashdata('error',$error);
            redirect('orangtua');
        };

        $data_ortu=array(
          'username'=>$data_post['nis'],
          'level'=>2,
          'password'=>md5($data_post['password'])	
        );

        $data=array(
            'nis'           => $data_post['nis'],
            'nama_anak'     => $data_post['nama_anak'],
            'nama_orangtua' => $data_post['nama_orangtua'],  
            'id_student'    => $data_post['id_student'],
            'tempat_lahir'  => $data_post['tempat_lahir'],  
            'tanggal_lahir' => $data_post['tanggal_lahir'],  
            'telp'          => $data_post['hp'],  
            'alamat_rumah'  => $data_post['alamat_rumah'],  
            'status'        => 0  
        );

        $query      = $this->orangtua_model->register($data);
        // $query_user = $this->auth_model->register($data_orangtua);
        /*if($query && $query_user){
            $success ="data telah berhasil ditambahkan";
            $this->session->set_flashdata('success',$success);
            redirect('orangtua');
        }
        */
        if($query){
    	 	    $success ="data telah berhasil ditambahkan";
            $this->session->set_flashdata('success',$success);
            redirect('orangtua');
        }
	}

	public function edit()
	{
		$id    = $this->uri->segment(3);
		$query = $this->orangtua_model->edit($id);
		$data  = array(
			'title' =>'sistem bimbingan konsultasi sekolah',
			'data'  =>$query,
			'list_student'=>$this->student_model->show()
		);
		$this->load->view('dashboard/orangtua/edit',$data);

	}

	public function update()
	{
		/* upload part */
		
		/* get all data*/
        $data_post = $this->input->post();
        //print_r($data_post);
        //die();
        $id=$data_post['id_orangtua'];
		// $config['upload_path'] ='./public/upload/';
  //       $config['allowed_types'] = 'gif|jpg|png';
  //       $config['overwrite'] = TRUE;
  //       $config['file_name']=date('Ymdhms').".jpg";
  //       $this->load->library('upload', $config);
  //       if ( ! $this->upload->do_upload('photo'))
  //       {
  //          $path=$data_post['old_photo'];
  //       }
  //       else
  //       {
  //       	unlink($data_post['old_photo']); 
  //           $path="public/upload/".$config['file_name'];
  //       }

        
        $data=array(
          'nama_anak'=>$data_post['nama'],
          'nama_orangtua'=>$data_post['nama_orangtua'],  
          'id_student'=>$data_post['id_student'],
          'tempat_lahir'=>$data_post['tempat_lahir'],  
          'tanggal_lahir'=>$data_post['tanggal_lahir'],  
          'telp'=>$data_post['hp'],  
          'alamat_rumah'=>$data_post['alamat_rumah']
        );

         // print_r($data);
         // die();


        $query=$this->orangtua_model->update($data,$id);
        if($query){
    	 	$success ="data telah berhasil diubah";
            $this->session->set_flashdata('success',$success);
            redirect('orangtua');
        }else{
        	$error ="data gagal diubah";
            $this->session->set_flashdata('error',$error);
            redirect('orangtua');
        }
	}


	public function delete()
	{
		$id=$this->uri->segment(3);
		$username=$this->uri->segment(4);
		$query=$this->orangtua_model->delete($id,$username);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('orangtua');
		}else{
			$error ="data telah gagal dihapuspus";
            $this->session->set_flashdata('error',$error);
            redirect('orangtua');
		}
		
	}

  public function restore()
  {
    $id = $this->uri->segment(3);
    $username = $this->uri->segment(4);
    $query = $this->orangtua_model->restore($id,$username);
    if ($query) {
      $success ="data telah berhasil dikembalikan";
      $this->session->set_flashdata('success',$success);
        redirect('orangtua');
    }else{
      $error ="data telah gagal dikembalikan";
      $this->session->set_flashdata('error',$error);
        redirect('orangtua');

    }

  }

}

/* End of file Parent.php */
/* Location: ./application/controllers/Parent.php */