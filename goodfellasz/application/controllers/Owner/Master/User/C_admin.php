<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
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
		$data['data_admin'] = $this->m_admin->getAdmin();
		$this->load->view('Admin/admin',$data); 
	//$this->template->load('Admin/Template/static.php', 'Admin/Master/User/admin', $data);
	}
	public function deleteAdmin($id){
		$del = array('admin_id' => $id);
		$this->m_admin->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
		redirect('Admin/Master/User/C_admin');
	}
	public function insertAdmin(){
		$username = $this->input->post('username_admin');
		$password = $this->input->post('password_admin');
		$nama = $this->input->post('nama_admin');
		$email = $this->input->post('email_admin');
		$telp = $this->input->post('telp_admin');

		$data = array(
			'admin_username'=>$username,
			'admin_password'=>$password,
			'admin_nama'=>$nama,
			'admin_email'=>$email,
			'admin_telp'=>$telp
		);
		$this->m_admin->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses input data</div>");
		redirect('Admin/Master/User/C_admin');
	}
	public function editAdmin(){
		$id = $this->input->post('id_admin');
		$username = $this->input->post('username_admin');
		$password = $this->input->post('password_admin');
		$nama = $this->input->post('nama_admin');
		$email = $this->input->post('email_admin');
		$telp = $this->input->post('telp_admin');

		$data = array(
			'admin_username'=>$username,
			'admin_password'=>$password,
			'admin_nama'=>$nama,
			'admin_email'=>$email,
			'admin_telp'=>$telp
		);
		$where = array(
			'admin_id' => $id
		);
 
		$this->m_admin->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_admin');
	}
	public function detailAdmin($id){
	    $result=$this->db->get_where('admin',array("admin_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
