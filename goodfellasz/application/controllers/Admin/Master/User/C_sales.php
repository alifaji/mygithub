<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sales extends CI_Controller {
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
		$data['data_sales'] = $this->m_sales->getSales();
		$this->load->view('Admin/data_sales',$data); 
	}
	public function deleteSales($id){
		$del = array('sales_id' => $id);
		$this->m_sales->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/User/C_sales');
	}
	public function insertSales(){
		$username = $this->input->post('username_sales');
		$password = $this->input->post('password_sales');
		$nama = $this->input->post('nama_sales');
		$email = $this->input->post('email_sales');
		$telp = $this->input->post('telp_sales');

		$data = array(
			'sales_username'=>$username,
			'sales_password'=>$password,
			'sales_nama'=>$nama,
			'sales_email'=>$email,
			'sales_telp'=>$telp
		);
		$this->m_sales->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/User/C_sales');
	}
	public function editSales(){
		$id = $this->input->post('id_sales');
		$username = $this->input->post('username_sales');
		$password = $this->input->post('password_sales');
		$nama = $this->input->post('nama_sales');
		$email = $this->input->post('email_sales');
		$telp = $this->input->post('telp_sales');

		$data = array(
			'sales_username'=>$username,
			'sales_password'=>$password,
			'sales_nama'=>$nama,
			'sales_email'=>$email,
			'sales_telp'=>$telp
		);
		$where = array(
			'sales_id' => $id
		);
 
		$this->m_sales->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/User/C_sales');
	}
	public function detailSales($id){
	    $result=$this->db->get_where('sales',array("sales_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
