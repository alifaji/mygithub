<?php 

class C_registrasi extends CI_Controller{

	function __construct(){
		parent::__construct();		

	}

	function index(){
		$this->load->view('registrasi');
	}
	function registrasi(){
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$telephone = $this->input->post('telephone');
		$where = array(
			'pelanggan_username' => $username
		);
		$data = array(
			'pelanggan_nama'=>$name,
			'pelanggan_username'=>$username,
			'pelanggan_password'=>$password,
			'pelanggan_alamat' => $address,
			'pelanggan_email'=>$email,
			'pelanggan_telp'=>$telephone,
			'pelanggan_tipe' => "Customer"
		);
		$cek_user =$this->m_login->cek_login("pelanggan",$where);
		if($cek_user->num_rows() > 0){
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\">Username telah digunakan, silahkan menggunakan username yang lain</div>");
			redirect('C_registrasi/index');
		} else {
			$this->m_pelanggan->insertData($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Registrasi Akun</div>");
			redirect('C_registrasi/index');
		}
	}
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'admin_username' => $username,
			//'admin_password' => md5($password)
			'admin_password' => $password
			);
		$where_sales = array(
			'sales_username' => $username,
			//'admin_password' => md5($password)
			'sales_password' => $password
		);
		$cek = $this->m_login->cek_login("admin",$where);
		$tes = $this->m_login->cek_login("sales",$where_sales);
		if($cek->num_rows() > 0){
		$data= $cek->row();
			$data_session = array(
				'nama' => $username,
				'status' => "login_admin"
				//'id'=>$data->admin_id
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("movement/showReport"));

		}else if ($tes->num_rows() > 0) {
			$data= $tes->row();
			$data_session = array(
				'nama' => $username,
				'status' => "login_customer",
				'id' => $data->sales_id,
				'sales' =>$data->sales_nama
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("movement/myCampaign"));
		}else{
			echo $this->session->set_flashdata('pesan',"<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove-sign\"></i> Username atau Password yang anda masukkan salahl </div>");
			redirect('C_login/index');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('movement/index'));
	}
}