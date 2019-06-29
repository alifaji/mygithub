<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mycustommer extends CI_Controller {
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
		// $data['data_customer'] = $this->m_customer->getCustomer();
		// $data['data_campaign'] = $this->m_campaign->getCampaign();
		$data['data_join'] = $this->m_campaign->joinDistinct();
		$this->load->view('Customer/my_customer',$data); 
	}
	// public function deleteCustomer($id){
	// 	$del = array('customer_id' => $id);
	// 	$this->m_customer->deleteData($del);
	// 	$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
 //  		redirect('Admin/Master/Data/C_customer');
	// }
	// public function insertCustomer(){
	// 	$nama = $this->input->post('nama_customer');
	// 	$alamat = $this->input->post('alamat_customer');
	// 	$email = $this->input->post('email_customer');
	// 	$telp = $this->input->post('telp_customer');

	// 	$data = array(
	// 		'customer_nama'=>$nama,
	// 		'customer_alamat'=>$alamat,
	// 		'customer_email'=>$email,
	// 		'customer_telp'=>$telp
	// 	);
	// 	$this->m_customer->insertData($data);
	// 	$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
	// 	redirect('Admin/Master/Data/C_customer');
	// }
	// public function editCustomer(){
	// 	$id = $this->input->post('id_customer');
	// 	$nama = $this->input->post('nama_customer');
	// 	$alamat = $this->input->post('alamat_customer');
	// 	$email = $this->input->post('email_customer');
	// 	$telp = $this->input->post('telp_customer');

	// 	$data = array(
	// 		'customer_nama'=>$nama,
	// 		'customer_alamat'=>$alamat,
	// 		'customer_email'=>$email,
	// 		'customer_telp'=>$telp
	// 	);
	// 	$where = array(
	// 		'customer_id' => $id
	// 	);
 
	// 	$this->m_customer->updateData($where,$data);
	// 	$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
	// 	redirect('Admin/Master/Data/C_customer');
	// }
	public function detailCustomer($id){
	    $result=$this->db->get_where('customer',array("customer_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
