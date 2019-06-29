<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_hairstyle extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		//$this->load->model('m_category');
			  // Load SiswaModel ke controller ini
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['data_hairstyle'] = $this->m_hairstyle->getHairstyle();
		$this->load->view('Admin/hairstyle',$data); 
	}
	public function deleteHairstyle($id){
		$del = array('id_hairstyle' => $id);
		$this->m_hairstyle->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_hairstyle');
	}
	public function insertHairstyle(){
		    $fileName = $this->input->post('file', TRUE);
			$config['upload_path'] = FCPATH ."uploads/";
			$config['file_name'] = $fileName;			
			$config['allowed_types'] = 'jpg|jpeg|png';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if(! $this->upload->do_upload('file')){
				echo "Error";
			}

				else{
					
					echo "berhasil";
					$media = $this->upload->data();
                    $inputFileName = $media['file_name'];
					$nama = $this->input->post('nama_hairstyle');
					$wajah = $this->input->post('tipe_wajah');
					$tipe = $this->input->post('tipe_rambut');
					$panjang = $this->input->post('panjang_rambut');
					$data = array(
						'hairstyle_nama'=>$nama,
						'tipe_wajah'=>$wajah,
						'tipe_rambut'=>$tipe,
						'panjang_rambut'=>$panjang,
						'hairstyle_foto'=>$inputFileName
					);
					$this->m_hairstyle->insertData($data);
					$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
					redirect('Admin/Master/Data/C_hairstyle');
				}
		
		
		
	
	}
	public function editHairstyle(){
		$fileName = $this->input->post('file', TRUE);
		$config['upload_path'] = FCPATH ."uploads/";
		$config['file_name'] = $fileName;			
		$config['allowed_types'] = 'jpg|jpeg|png';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if(! $this->upload->do_upload('file')){
			echo "Error";
		}

			else{
				
				echo "berhasil";
				$media = $this->upload->data();
				$inputFileName = $media['file_name'];
		$id = $this->input->post('id_hairstyle');
		$nama = $this->input->post('nama_hairstyle');
		$wajah = $this->input->post('tipe_wajah');
		$tipe = $this->input->post('tipe_rambut');
		$panjang = $this->input->post('panjang_rambut');
		$data = array(
			'hairstyle_nama'=>$nama,
			'tipe_wajah'=>$wajah,
			'tipe_rambut'=>$tipe,
			'panjang_rambut'=>$panjang,
			'hairstyle_foto'=>$inputFileName

		);
		$where = array(
			'id_hairstyle' => $id
		);
 
		$this->m_hairstyle->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_hairstyle');
	}
	}
	public function detailHairstyle($id){
	    $result=$this->db->get_where('hairstyle',array("id_hairstyle"=>$id))->row();	
	    echo json_encode($result);
	}
}
