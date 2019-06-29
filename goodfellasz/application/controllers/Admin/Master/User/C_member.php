<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_member extends CI_Controller {
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
		$data['data_member'] = $this->m_member->getMember();
		$this->load->view('Admin/member',$data); 
	//$this->template->load('member/Template/static.php', 'member/Master/User/member', $data);
	}
	public function deleteMember($id){
		$del = array('id_member' => $id);
		$this->m_member->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
		redirect('Admin/Master/User/C_member');
	}
	public function insertMember(){
		$username = $this->input->post('username_member');
		$password = $this->input->post('password_member');
		$nama = $this->input->post('nama_member');
		$email = $this->input->post('email_member');
		$telp = $this->input->post('telp_member');
		$alamat = $this->input->post('alamat_member');

		$data = array(
			'member_username'=>$username,
			'member_password'=>$password,
			'member_nama'=>$nama,
			'member_email'=>$email,
			'member_telp'=>$telp,
			'member_alamat' => $alamat
		);
		$this->m_member->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses input data</div>");
		redirect('Admin/Master/User/C_member');
	}
	public function editMember(){
		$id = $this->input->post('id_member');
		$username = $this->input->post('username_member');
		$password = $this->input->post('password_member');
		$nama = $this->input->post('nama_member');
		$email = $this->input->post('email_member');
		$telp = $this->input->post('telp_member');
		$alamat = $this->input->post('alamat_member');

		$data = array(
			'member_username'=>$username,
			'member_password'=>$password,
			'member_nama'=>$nama,
			'member_email'=>$email,
			'member_telp'=>$telp,
			'member_alamat' => $alamat
		);
		$where = array(
			'id_member' => $id
		);
 
		$this->m_member->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_member');
	}
	public function detailMember($id){
	    $result=$this->db->get_where('member',array("id_member"=>$id))->row();	
	    echo json_encode($result);
	}
}
