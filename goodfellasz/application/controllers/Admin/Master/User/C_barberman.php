<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barberman extends CI_Controller {
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
		//$data['data_product'] = $this->m_product->getProduct();
		$data['data_barber'] = $this->m_barberman->getBarberman();
		$data['cabang'] = $this->m_cabang->getCabang();
		$this->load->view('Admin/barberman',$data); 
	//$this->template->load('Admin/Template/static.php', 'Admin/Master/User/admin', $data);
	}
	public function deleteBarberman($id){
		$del = array('id_barberman' => $id);
		$this->m_barberman->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
		redirect('Admin/Master/User/C_barberman');
	}
	public function insertBarberman(){
		$nama = $this->input->post('nama_barberman');
		$email = $this->input->post('email_barberman');
		$telp = $this->input->post('telp_barberman');
		$alamat = $this->input->post('alamat_barberman');
		$status = $this->input->post('status_barberman');
		$cabang =$this->input->post('cabang_barberman');
		$kursi = $this->input->post('kursi_barberman');
		$ready = $this->input->post('ready_barberman');

		$data = array(
			'barberman_nama'=>$nama,
			'barberman_email'=>$email,
			'barberman_telp'=>$telp,
			'barberman_alamat' => $alamat,
			'barberman_status' => $status,
			'barberman_cabang' => $cabang,
			'barberman_kursi' => $kursi,
			'barberman_ready' => $ready
		);
		$this->m_barberman->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses input data</div>");
		redirect('Admin/Master/User/C_barberman');
	}
	public function editBarberman(){
		$id = $this->input->post('id_barberman');
		$nama = $this->input->post('nama_barberman');
		$email = $this->input->post('email_barberman');
		$telp = $this->input->post('telp_barberman');
		$alamat = $this->input->post('alamat_barberman');
		$status = $this->input->post('status_barberman');
		$cabang = $this->input->post('cabang_barberman');
		$kursi = $this->input->post('kursi_barberman');
		$ready = $this->input->post('ready_barberman');

		$data = array(
			'barberman_nama'=>$nama,
			'barberman_email'=>$email,
			'barberman_telp'=>$telp,
			'barberman_alamat' => $alamat,
			'barberman_status' => $status,
			'barberman_cabang' => $cabang,
			'barberman_kursi' => $kursi,
			'barberman_ready' => $ready
		);
		$where = array(
			'id_barberman' => $id
		);
 
		$this->m_barberman->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_barberman');
	}
	public function detailBarberman($id){
	    $result=$this->db->get_where('barberman',array("id_barberman"=>$id))->row();	
	    echo json_encode($result);
	}
}
