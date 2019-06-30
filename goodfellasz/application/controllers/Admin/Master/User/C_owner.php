<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_owner extends CI_Controller {
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
		$data['data_owner'] = $this->m_owner->getOwner();
		$this->load->view('Admin/owner',$data); 
	//$this->template->load('Admin/Template/static.php', 'Admin/Master/User/admin', $data);
	}
	public function deleteOwner($id){
		$del = array('id_owner' => $id);
		$this->m_owner->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
		redirect('Admin/Master/User/C_owner');
	}
	public function insertOwner(){
		$username = $this->input->post('username_owner');
		$password = $this->input->post('password_owner');
		$nama = $this->input->post('nama_owner');
		$email = $this->input->post('email_owner');
		$telp = $this->input->post('telp_owner');
		$alamat = $this->input->post('alamat_owner');

		$data = array(
			'owner_username'=>$username,
			'owner_password'=>$password,
			'owner_nama'=>$nama,
			'owner_email'=>$email,
			'owner_telp'=>$telp,
			'owner_alamat' => $alamat
		);
		$this->m_owner->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses input data</div>");
		redirect('Admin/Master/User/C_owner');
	}
	public function editOwner(){
		$id = $this->input->post('id_owner');
		$username = $this->input->post('username_owner');
		$password = $this->input->post('password_owner');
		$nama = $this->input->post('nama_owner');
		$email = $this->input->post('email_owner');
		$telp = $this->input->post('telp_owner');
		$alamat = $this->input->post('alamat_owner');

		$data = array(
			'owner_username'=>$username,
			'owner_password'=>$password,
			'owner_nama'=>$nama,
			'owner_email'=>$email,
			'owner_telp'=>$telp,
			'owner_alamat' => $alamat
		);
		$where = array(
			'id_owner' => $id
		);
 
		$this->m_owner->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_owner');
	}
	public function detailOwner($id){
	    $result=$this->db->get_where('owner',array("id_owner"=>$id))->row();	
	    echo json_encode($result);
	}
}
