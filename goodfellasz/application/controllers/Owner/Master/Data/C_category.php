<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_category extends CI_Controller {
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
		$data['data_category'] = $this->m_category->getCategory(); 
  		$this->load->view('Admin/category',$data);
	}
	public function deleteCategory($id){
		$del = array('category_id' => $id);
		$this->m_category->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_category');
	}
	public function insertCategory(){
		$kategori = $this->input->post('nama_category');
		$data = array('category_nama'=>$kategori);
		$this->m_category->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_category');
	}
	public function editCategory(){
		$id = $this->input->post('id_category');
		$nama = $this->input->post('nama_category');

		$data = array(
			'category_nama' => $nama
		);
 
		$where = array(
			'category_id' => $id
		);
 
		$this->m_category->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_category');
	}
	public function detailCategory($id){
	    $result=$this->db->get_where('category',array("category_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
