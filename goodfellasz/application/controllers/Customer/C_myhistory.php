<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_myhistory extends CI_Controller {
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
		//$id = $this->uri->segment(5);
		$data['data_pelanggan'] = $this->m_pelanggan->get_data();
		$this->load->view('Customer/my_history',$data); 
	}
	public function detail_history(){
	
		$id = $this->input->get('id');
		$id2= $this->input->get('id2');
		$data['detail_history'] = $this->m_pelanggan->get_data_where($id,$id2);
		$this->load->view('Customer/detail_history',$data); 
		
	}
	
}
