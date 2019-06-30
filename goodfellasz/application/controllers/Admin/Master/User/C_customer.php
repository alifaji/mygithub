<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends CI_Controller {
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
		$data['data_customer'] = $this->m_customer->getCustomer();
		$this->load->view('Admin/customer',$data); 
	//$this->template->load('Admin/Template/static.php', 'Admin/Master/User/admin', $data);
	}
	public function deleteCustomer($id){
		$del = array('customer_id' => $id);
		$this->m_customer->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
		redirect('Admin/Master/User/C_customer');
	}
	public function insertCustomer(){
		$username = $this->input->post('username_customer');
		$password = $this->input->post('password_customer');
		$nama = $this->input->post('nama_customer');
		$email = $this->input->post('email_customer');
		$telp = $this->input->post('telp_customer');
		$alamat = $this->input->post('alamat_customer');

		$data = array(
			'customer_username'=>$username,
			'customer_password'=>$password,
			'customer_nama'=>$nama,
			'customer_email'=>$email,
			'customer_telp'=>$telp,
			'customer_alamat' => $alamat
		);
		$this->m_customer->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses input data</div>");
		redirect('Admin/Master/User/C_customer');
	}
	public function editCustomer(){
		$id = $this->input->post('id_customer');
		$username = $this->input->post('username_customer');
		$password = $this->input->post('password_customer');
		$nama = $this->input->post('nama_customer');
		$email = $this->input->post('email_customer');
		$telp = $this->input->post('telp_customer');
		$alamat = $this->input->post('alamat_customer');

		$data = array(
			'customer_username'=>$username,
			'customer_password'=>$password,
			'customer_nama'=>$nama,
			'customer_email'=>$email,
			'customer_telp'=>$telp,
			'customer_alamat' => $alamat
		);
		$where = array(
			'customer_id' => $id
		);
 
		$this->m_customer->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_customer');
	}
	public function detailCustomer($id){
	    $result=$this->db->get_where('customer',array("customer_id"=>$id))->row();	
	    echo json_encode($result);
	}
	public function verificationCustomer(){
		$id = $this->input->post('id_customer');
		$username = $this->input->post('username_customer');
		$password = $this->input->post('password_customer');
		$nama = $this->input->post('nama_customer');
		$email = $this->input->post('email_customer');
		$telp = $this->input->post('telp_customer');
		$alamat = $this->input->post('alamat_customer');
		$date = $this->input->post('tanggal_customer');
		$kode = $this->input->post('kode_customer');

		$data = array(
			'member_username'=>$username,
			'member_password'=>$password,
			'member_nama'=>$nama,
			'member_email'=>$email,
			'member_telp'=>$telp,
			'member_alamat' => $alamat,
			'member_tanggal' => $date,
			'member_kode' => $kode
		);
		$del = array(
			'customer_id'=>$id
		);
		$this->m_member->insertData($data);
		$this->m_customer->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Verification Data</div>");
		redirect('Admin/Master/User/C_customer');
	}
}
