<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_treatment extends CI_Controller {
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
		$data['data_treatment'] = $this->m_treatment->getTreatment();
		$this->load->view('Admin/treatment',$data); 
	}
	public function deleteTreatment($id){
		$del = array('id_treatment' => $id);
		$this->m_treatment->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_treatment');
	}
	public function insertTreatment(){
		$treatment = $this->input->post('nama_treatment');
		$harga = $this->input->post('harga_treatment');
		$data = array(
			'treatment_nama'=>$treatment,
			'treatment_harga'=>$harga
		);
		$this->m_treatment->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_treatment');
	}
	public function editTreatment(){
		$id = $this->input->post('id_treatment');
		$treatment = $this->input->post('nama_treatment');
		$harga = $this->input->post('harga_treatment');
		$data = array(
			'treatment_nama'=>$treatment,
			'treatment_harga'=>$harga
		);
		$where = array(
			'id_treatment' => $id
		);
 
		$this->m_treatment->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_treatment');
	}
	public function detailTreatment($id){
	    $result=$this->db->get_where('treatment',array("id_treatment"=>$id))->row();	
	    echo json_encode($result);
	}
}
