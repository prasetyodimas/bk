<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit extends CI_Controller {
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
   }

	public function index()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->visit_model->show()
		);	
		$this->load->view('dashboard/visit/index',$data);
	}

	 public function pdf(){
	 	$id=$this->uri->segment(3);
        $query=$this->visit_model->edit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_visit'=>$query,
            'data_sekolah'=>$data_sekolah
        );
         if($id=='all'){
         $html=$this->load->view('dashboard/visit/print',$data,true);
         }else{
         $html=$this->load->view('dashboard/visit/print-detail',$data,true);
         }
        $this->pdfgenerator->generate($html,'contoh');
  }

	public function add()
	{
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->visit_model->show()
		);	
		$this->load->view('dashboard/visit/add',$data);
	}

	

	public function delete()
	{
		$id=$this->uri->segment(3);
		$query=$this->visit_model->delete($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('visit');
		}else{
			$error ="data telah gagal dibahpus";
            $this->session->set_flashdata('error',$error);
            redirect('visit');
		}
		
	}


	/* get data JSON for visit module */

	public function getData()
	{
		$keyword=$this->uri->segment(3);
		$query=$this->student_model->getData($keyword);
		echo $query;
	}

	public function save()
	{
		 $data_post = $this->input->post();
		$data=array(
		'id_student'=>$data_post['id_student'],
		// 'nama'=>$data_post['nama'],
		// 'kelas'=>$data_post['kelas'],
		// 'alamat_rumah'=>$data_post['alamat_rumah'],
		'tgl_kunjungan'=>$data_post['tgl_kunjungan'],
		'nama_petugas_1'=>$data_post['nama_petugas_1'],
		'nip_petugas_1'=>$data_post['nip_petugas_1'],
		'nama_petugas_2'=>$data_post['nama_petugas_2'],
		'nip_petugas_2'=>$data_post['nip_petugas_2'],
		'jabatan_1'=>$data_post['jabatan_1'],
		'jabatan_2'=>$data_post['jabatan_2'],	
		'hasil'=>$data_post['hasil']	
		);

		$query=$this->visit_model->register($data);
		if($query){
    	 	$success ="data telah berhasil di tambah";
            $this->session->set_flashdata('success',$success);
            redirect('visit');
        }else{
        	$error ="data gagal di tambah";
            $this->session->set_flashdata('error',$error);
            redirect('visit');
        }
	

	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->visit_model->edit($id)
		);	
		$this->load->view('dashboard/visit/edit',$data);
	}
	
	public function detail()
	{
		$id=$this->uri->segment(3);
		$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->visit_model->edit($id)
		);	
		$this->load->view('dashboard/visit/detail',$data);
	}

	public function update()
	{
	 	$data_post = $this->input->post();
		$data=array(
		'id_student'=>$data_post['id_student'],
		'tgl_kunjungan'=>$data_post['tgl_kunjungan'],
		'nama_petugas_1'=>$data_post['nama_petugas_1'],
		'nip_petugas_1'=>$data_post['nip_petugas_1'],
		'nama_petugas_2'=>$data_post['nama_petugas_2'],
		'nip_petugas_2'=>$data_post['nip_petugas_2'],
		'jabatan_1'=>$data_post['jabatan_1'],
		'jabatan_2'=>$data_post['jabatan_2'],	
		'hasil'=>$data_post['hasil']	
		);	

		$query=$this->visit_model->update($data,$data_post['id_kunjungan']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('visit');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('visit');
        }
	}


/* ==========================================================================
HOME VISIT CONTROLLER
==========================================================================*/

public function homeVisit()
{
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->visit_model->showHomeVisit()
		);	
		$this->load->view('dashboard/visit/home-visit-list',$data);
}



public function addHomeVisit()
{
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/visit/add-home-visit',$data);
}

public function editHomeVisit()
{
	$id=$this->uri->segment(3);
	$query=$this->visit_model->editHomeVisit($id);
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$query
		);	
		$this->load->view('dashboard/visit/edit-home-visit',$data);
}

public function saveHomeVisit()
{
	 $data_post = $this->input->post();
	 $data=array(
	 'no_surat'=>$data_post['no_surat'],
	 'nama'=>$data_post['nama'],
	 'nip'=>$data_post['nip'],
	 'jabatan'=>$data_post['jabatan'],
	 'tanggal'=>$data_post['tanggal'],
	 'waktu'=>$data_post['waktu'],
	 'keperluan'=>$data_post['keperluan'],
	 'tempat'=>$data_post['tempat']	
	 );
	 $query=$this->visit_model->registerHomeVisit($data);
		if($query){
       	  $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data data',
            'data_sekolah'=>$data_sekolah,
            'data_home_visit'=>$data
        );
        
        $html=$this->load->view('dashboard/visit/print-home-visit',$data,true);
        $this->pdfgenerator->generate($html,'contoh');
        	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('visit/homeVisit');
        }else{
        	$error ="data gagal di tambah";
            $this->session->set_flashdata('error',$error);
            redirect('visit/homeVisit');
        }

}

public function updateHomeVisit()
{
	 $data_post = $this->input->post();
	 $data=array(
	 'no_surat'=>$data_post['no_surat'],
	 'nama'=>$data_post['nama'],
	 'nip'=>$data_post['nip'],
	 'jabatan'=>$data_post['jabatan'],
	 'tanggal'=>$data_post['tanggal'],
	 'waktu'=>$data_post['waktu'],
	 'keperluan'=>$data_post['keperluan'],
	 'tempat'=>$data_post['tempat']	
	 );
	 $query=$this->visit_model->updateHomeVisit($data,$data_post['id_home_visit']);
		if($query){
       	  $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data data',
            'data_sekolah'=>$data_sekolah,
            'data_home_visit'=>$data
        );
        
        $html=$this->load->view('dashboard/visit/print-home-visit',$data,true);
        $this->pdfgenerator->generate($html,'contoh');

        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('visit/homeVisit');
        }

}

	public function deleteHomeVisit()
	{
		$id=$this->uri->segment(3);
		$query=$this->visit_model->deleteHomeVisit($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('visit/homeVisit');
		}else{
			$error ="data telah gagal dibahpus";
            $this->session->set_flashdata('error',$error);
            redirect('visit/homeVisit');
		}
		
	}
/* ==========================================================================
Satkung HOME VISIT CONTROLLER
==========================================================================*/

public function detailSatkung()
{
	$id=$this->uri->segment(3);
	$query=$this->visit_model->editSatkungVisit($id);
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$query
		);	
		$this->load->view('dashboard/visit/detail-satkung',$data);
}

public function satkungPrint(){

	$id=$this->uri->segment(3);
        $query=$this->visit_model->editSatkungVisit($id);
        $data_sekolah=$this->school_model->show();
        $this->load->library('PdfGenerator');
         $data=array(
            'title'=>'cetak data siswa',
            'data_satkung'=>$query,
            'data_sekolah'=>$data_sekolah
        );
         if($id=='all'){
         $html=$this->load->view('dashboard/visit/print-satkung',$data,true);
         }else{
         $html=$this->load->view('dashboard/visit/print-satkung-detail',$data,true);
         }
        $this->pdfgenerator->generate($html,'contoh');
}


public function satkung()
{
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$this->visit_model->showSatkung()
		);	
		$this->load->view('dashboard/visit/satkung-list',$data);
}

public function addSatkung()
{
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		);	
		$this->load->view('dashboard/visit/add-satkung',$data);
}

public function saveSatkung()
{
	 $data_post = $this->input->post();
	 $data=array(
	 'sasaran_pelayanan'=>$data_post['sasaran_pelayanan'],
	 'topik'=>$data_post['topik'],
	 'bidang_layanan'=>$data_post['bidang_layanan'],
	 'jenis_layanan'=>$data_post['jenis_layanan'],
	 'fungsi_layanan'=>$data_post['fungsi_layanan'],
	 'kompetensi'=>$data_post['kompetensi'],
	 'bentuk_kegiatan'=>$data_post['bentuk_kegiatan'],
	 'alokasi_waktu'=>$data_post['alokasi_waktu'],
	 'waktu_pelaksanaan'=>$data_post['waktu_pelaksanaan'],
	 'tempat_kegiatan'=>$data_post['tempat_kegiatan'],
	 'pelaksana_kegiatan'=>$data_post['pelaksana_kegiatan'],
	 'pihak'=>$data_post['pihak'],
	 'alat'=>$data_post['alat'],
	 'konselor'=>$data_post['konselor'],
	 'konseli'=>$data_post['konseli'],
	 'laiseg'=>$data_post['laiseg'],
	 'laijapen'=>$data_post['laijapen'],
	 'laijapang'=>$data_post['laijapang'],
	 'rencana_tidak_lanjut'=>$data_post['rencana_tidak_lanjut'],
	 'pembiayaan'=>$data_post['pembiayaan'],
	 'id_student'=>$data_post['id_student']
	 );

	 $query=$this->visit_model->registerSatkung($data);
		if($query){
    	 	$success ="data telah berhasil di tambah";
            $this->session->set_flashdata('success',$success);
            redirect('visit/satkung');
        }else{
        	$error ="data gagal di tambah";
            $this->session->set_flashdata('error',$error);
            redirect('visit/satkung');
        }



}

public function updateSatkung()
{
	 $data_post = $this->input->post();
	 $data=array(
	 'sasaran_pelayanan'=>$data_post['sasaran_pelayanan'],
	 'topik'=>$data_post['topik'],
	 'bidang_layanan'=>$data_post['bidang_layanan'],
	 'jenis_layanan'=>$data_post['jenis_layanan'],
	 'fungsi_layanan'=>$data_post['fungsi_layanan'],
	 'kompetensi'=>$data_post['kompetensi'],
	 'bentuk_kegiatan'=>$data_post['bentuk_kegiatan'],
	 'alokasi_waktu'=>$data_post['alokasi_waktu'],
	 'waktu_pelaksanaan'=>$data_post['waktu_pelaksanaan'],
	 'tempat_kegiatan'=>$data_post['tempat_kegiatan'],
	 'pelaksana_kegiatan'=>$data_post['pelaksana_kegiatan'],
	 'pihak'=>$data_post['pihak'],
	 'alat'=>$data_post['alat'],
	 'konselor'=>$data_post['konselor'],
	 'konseli'=>$data_post['konseli'],
	 'laiseg'=>$data_post['laiseg'],
	 'laijapen'=>$data_post['laijapen'],
	 'laijapang'=>$data_post['laijapang'],
	 'rencana_tidak_lanjut'=>$data_post['rencana_tidak_lanjut'],
	 'pembiayaan'=>$data_post['pembiayaan'],
	 'id_student'=>$data_post['id_student']
	 );

	 $query=$this->visit_model->updateSatkung($data,$data_post['id_satkung_home_visit']);
		if($query){
    	 	$success ="data telah berhasil di ubah";
            $this->session->set_flashdata('success',$success);
            redirect('visit/satkung');
        }else{
        	$error ="data gagal di ubah";
            $this->session->set_flashdata('error',$error);
            redirect('visit/satkung');
        }



}


public function editSatkungVisit()
{
	$id=$this->uri->segment(3);
	$query=$this->visit_model->editSatkungVisit($id);
	$data=array(
		'title'=>'sistem bimbingan konsultasi sekolah',
		'data'=>$query
		);	
		$this->load->view('dashboard/visit/edit-satkung-home-visit',$data);
}

    public function deleteSatkungVisit()
	{
		$id=$this->uri->segment(3);
		$query=$this->visit_model->deleteSatkungVisit($id);
		if($query){
			$success ="data telah berhasil dihapus";
            $this->session->set_flashdata('success',$success);
            redirect('visit/satkung');
		}else{
			$error ="data telah gagal dibahpus";
            $this->session->set_flashdata('error',$error);
            redirect('visit/satkung');
		}
		
	}


}

/* End of file visit.php */
/* Location: ./application/controllers/visit.php */