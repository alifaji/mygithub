<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_product extends CI_Controller {
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
		$data['data_product'] = $this->m_product->getProduct();
		$this->load->view('Admin/product',$data); 
	}
	public function deleteProduct($id){
		$del = array('product_id' => $id);
		$this->m_product->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_product');
	}
	public function insertProduct(){
		$produk = $this->input->post('nama_product');
		$jumlah = $this->input->post('jumlah_product');
		$harga = $this->input->post('harga_product');
		$data = array(
			'product_nama'=>$produk,
			'product_jumlah'=>$jumlah,
			'product_harga'=>$harga
		);
		$this->m_product->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_product');
	}
	public function editProduct(){
		$id = $this->input->post('id_product');
		$produk = $this->input->post('nama_product');
		$jumlah = $this->input->post('jumlah_product');
		$harga = $this->input->post('harga_product');

		$data = array(
			'product_nama'=>$produk,
			'product_jumlah'=>$jumlah,
			'product_harga'=>$harga
		);
		$where = array(
			'product_id' => $id
		);
 
		$this->m_product->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_product');
	}
	public function detailProduct($id){
	    $result=$this->db->get_where('product',array("product_id"=>$id))->row();	
	    echo json_encode($result);
	}
}
