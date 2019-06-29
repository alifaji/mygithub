<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_myantrian extends CI_Controller {
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
		$data['cabang'] = $this->m_cabang->getCabang();
		$data['data_barberman'] = $this->m_barberman->getBarberman();
		$data['antrian'] = $this->m_antrian->get_data_antrian();
		$data['pelanggan'] = $this->m_pelanggan->getPelanggan();

		$this->load->view('Customer/my_antrian',$data); 
	}
	public function get_antrian()
	{
		$cabang = $this->input->post('cabang');
		$data['cabang'] = $this->m_cabang->getCabang();
		$data['data_barberman'] = $this->m_barberman->getBarberman2($cabang);
		$data['antrian'] = $this->m_antrian->get_antrian();
		$this->load->view('Customer/my_antrian',$data); 
	}
	public function delete_antrian($id){
		$del = array('id_antrian' => $id);
		$this->m_antrian->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
		redirect('Customer/C_myantrian/index');
	}
	public function insert_antrian(){	
		$no_kursi = $this->input->post('no_kursi');
		$time = $this->input->post('time');
		$nama_user = $this->session->userdata('id_pelanggan');
		$cabang = $this->input->post('cabang');

		$where = array(
			'antrian_kursi'=>$no_kursi,
			'antrian_cabang'=>$cabang,
			'antrian_jam'=>$time
		);
		$data = array(
			'antrian_status	'=>"pending",
			'antrian_kursi'=>$no_kursi,
			'id_pelanggan'=>$nama_user,
			'antrian_cabang'=>$cabang,
			'antrian_jam'=>$time

		);
		$cek = $this->m_antrian->cek_data("antrian",$where);
		if($cek->num_rows() > 0){
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\">Waktu sudah ada yang pesan, silahkan pilih waktu yang lain</div>");
			redirect('Customer/C_myantrian/index');
		} else {
			$this->m_antrian->insertData($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
			redirect('Customer/C_myantrian/index');
		}
		
	}
	public function edit_antrian(){
		$id = $this->input->post('id_antrian');
		$time = $this->input->post('time');
		$status = $this->input->post('status');
		$nama_user = $this->input->post('nama_user'); 
		$data = array(
			'antrian_jam'=>$time,
			'antrian_pelanggan'=>$nama_user,
			'antrian_status'=>$status

		);
		$where_edit = array(
			'antrian_kursi'=>$no_kursi,
			'antrian_cabang'=>$cabang,
			'antrian_jam'=>$time
		);
		$where = array(
			'id_antrian' => $id
		);
 		$cek = $this->m_antrian->cek_data("antrian",$where_edit);
		if($cek->num_rows() > 0){
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\">Waktu sudah ada yang pesan, silahkan pilih waktu yang lain</div>");
			redirect('Customer/C_myantrian/index');
		} else {
			$this->m_antrian->updateData($where,$data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
			redirect('Customer/C_myantrian/index');
		}
		
	}
	public function detail_antrian($id){

	    $result=$this->db->get_where('antrian',array("id_antrian"=>$id))->row();	
	    echo json_encode($result);
	}
}
