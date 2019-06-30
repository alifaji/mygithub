<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cabang extends CI_Controller {
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
		$data['data_cabang'] = $this->m_cabang->getCabang();
		$this->load->view('Admin/cabang',$data); 
	}
	public function deleteCabang($id){
		$del = array('id_cabang' => $id);
		$this->m_cabang->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_cabang');
	}
	public function insertCabang(){
		$cabang = $this->input->post('nama_cabang');
		$alamat = $this->input->post('alamat_cabang');
		$telp = $this->input->post('telp_cabang');
		$data = array(
			'cabang_nama'=>$cabang,
			'cabang_alamat'=>$alamat,
			'cabang_telp'=>$telp
		);
		$this->m_cabang->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_cabang');
	}
	public function editCabang(){
		$id = $this->input->post('id_cabang');
		$cabang = $this->input->post('nama_cabang');
		$alamat = $this->input->post('alamat_cabang');
		$telp = $this->input->post('telp_cabang');
		$data = array(
			'cabang_nama'=>$cabang,
			'cabang_alamat'=>$alamat,
			'cabang_telp'=>$telp
		);
		$where = array(
			'id_cabang' => $id
		);
 
		$this->m_cabang->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_cabang');
	}
	public function detailCabang($id){
	    $result=$this->db->get_where('cabang',array("id_cabang"=>$id))->row();	
	    echo json_encode($result);
	}
}
