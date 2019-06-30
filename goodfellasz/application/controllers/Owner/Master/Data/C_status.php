<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_status extends CI_Controller {
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
		$data['data_status'] = $this->m_status->getStatus(); 
  		$this->load->view('Admin/status',$data);
	}
	public function deleteStatus($id){
		$del = array('status_id' => $id);
		$this->m_status->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_status');
	}
	public function insertStatus(){
		$status= $this->input->post('nama_status');
		$data = array('status_nama'=>$status);
		$this->m_status->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_status');
	}
	public function editStatus(){
		$id = $this->input->post('id_status');
		$nama = $this->input->post('nama_status');

		$data = array(
			'status_nama' => $nama
		);
 
		$where = array(
			'status_id' => $id
		);
 
		$this->m_status->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_status');
	}
	public function detailStatus($id){
	    $result=$this->db->get_where('status',array("status_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
