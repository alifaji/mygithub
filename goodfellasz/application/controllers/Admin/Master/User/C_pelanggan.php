<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pelanggan extends CI_Controller {
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
		$data['data_pelanggan'] = $this->m_pelanggan->getPelanggan();
		$data['data_customer'] = $this->m_pelanggan->getCustomer();
		$data['data_member'] = $this->m_pelanggan->getMember();
		$this->load->view('Admin/pelanggan',$data); 
	}
	public function deletePelanggan($id){
		$del = array('id_pelanggan' => $id);
		$this->m_pelanggan->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/User/C_pelanggan');
	}
	public function insertPelanggan(){
		$username = $this->input->post('username_pelanggan');
		$password = $this->input->post('password_pelanggan');
		$nama = $this->input->post('nama_pelanggan');
		$email = $this->input->post('email_pelanggan');
		$telp = $this->input->post('telp_pelanggan');
		$alamat = $this->input->post('alamat_pelanggan');
		$tipe = $this->input->post('tipe_pelanggan');

		$where = array(
			'pelanggan_username'=>$username
		);
		$data = array(
			'pelanggan_username'=>$username,
			'pelanggan_password'=>$password,
			'pelanggan_nama'=>$nama,
			'pelanggan_email'=>$email,
			'pelanggan_telp'=>$telp,
			'pelanggan_alamat' => $alamat,
			'pelanggan_tipe' => $tipe
		);
		$cek = $this->m_pelanggan->cek_data("pelanggan",$where);
		if($cek->num_rows() > 0){
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\">Username Telah Digunakan</div>");
			redirect('Admin/Master/User/C_pelanggan');
		} else {
			$this->m_pelanggan->insertData($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
			redirect('Admin/Master/User/C_pelanggan');
		}
		
	}
	public function editPelanggan(){
		$id = $this->input->post('id_pelanggan');
		$nama = $this->input->post('nama_pelanggan');
		$password = $this->input->post('password_pelanggan');
		$email = $this->input->post('email_pelanggan');
		$telp = $this->input->post('telp_pelanggan');
		$alamat = $this->input->post('alamat_pelanggan');

		$where = array(
			'id_pelanggan'=>$id
		);
		$data = array(
			'pelanggan_nama'=>$nama,
			'pelanggan_password'=>$password,
			'pelanggan_email'=>$email,
			'pelanggan_telp'=>$telp,
			'pelanggan_alamat' => $alamat
		);
 
		$this->m_pelanggan->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_pelanggan');
	}
	public function detailPelanggan($id){
	    $result=$this->db->get_where('pelanggan',array("id_pelanggan"=>$id))->row();	
	    echo json_encode($result);
	}
	public function verificationPelanggan(){
		$id = $this->input->post('id_pelanggan');
		$date = $this->input->post('tanggal_pelanggan');
		$kode = $this->input->post('kode_pelanggan');
		$tipe = $this->input->post('tipe_pelanggan');

		$where = array(
			'id_pelanggan'=>$id
		);
		$data = array(
			'pelanggan_tanggal' => $date,
			'pelanggan_kode' => $kode,
			'pelanggan_tipe' => $tipe
		);
		$this->m_pelanggan->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Verification Data</div>");
		redirect('Admin/Master/User/C_pelanggan');
	}
}
