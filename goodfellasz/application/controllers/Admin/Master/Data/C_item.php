<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_item extends CI_Controller {
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
		$data['data_item'] = $this->m_item->getItem();
		$data['data_treatment'] = $this->m_item->getTreatment();
		$data['data_product'] = $this->m_item->getProduct();
		$this->load->view('Admin/item',$data); 
	}
	public function deleteItem($id){
		$del = array('id_item' => $id);
		$this->m_item->deleteData($del);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Hapus Data</div>");
  		redirect('Admin/Master/Data/C_item');
	}
	public function insertItem(){
		$produk = $this->input->post('nama_item');
		$jumlah = $this->input->post('jumlah_item');
		$harga = $this->input->post('harga_item');
		$jenis = $this->input->post('jenis_item');
		$data = array(
			'item_nama'=>$produk,
			'item_jumlah'=>$jumlah,
			'item_harga'=>$harga,
			'item_jenis'=>$jenis
		);
		$this->m_item->insertData($data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Input Data</div>");
		redirect('Admin/Master/Data/C_item');
	}
	public function editItem(){
		$id = $this->input->post('id_item');
		$produk = $this->input->post('nama_item');
		$jumlah = $this->input->post('jumlah_item');
		$harga = $this->input->post('harga_item');
		$jenis = $this->input->post('jenis_item');
		$data = array(
			'item_nama'=>$produk,
			'item_jumlah'=>$jumlah,
			'item_harga'=>$harga,
			'item_jenis'=>$jenis
		);
		$where = array(
			'id_item' => $id
		);
 
		$this->m_item->updateData($where,$data);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i>  Sukses Edit Data</div>");
		redirect('Admin/Master/Data/C_item');
	}
	public function detailItem($id){
	    $result=$this->db->get_where('item',array("id_item"=>$id))->row();	
	    echo json_encode($result);
	}
	public function add_restock(){
		$id = $this->input->post('id_item');
		$jumlah = $this->input->post('jumlah_item');
		$result =  $this->m_item->get_data_item($id);
		$nama = "";
		$harga = "";
		$jenis = "";
		foreach($result as $key){
			$nama = $key->item_nama;
			$harga = $key->item_harga;
			$jenis = $key->item_jenis;

		}
		$data = array(
			'id'      => $id,
			'qty'     => $jumlah,
			'price'   => $harga,
			'name'    => $nama,
			'jenis'   => $jenis,
			'saldo'   => 0,
			'stock'   => 0,
			'diskon'  => 0	
		);
	$this->cart->insert($data);
	}
	function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
		$no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
					<td>'.$items['name'].'</td>
					<td>'.$items['jenis'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>    
			        <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>

                </tr>
			';
			
			
		}
		
		return $output;

	}
    function load_cart(){ //load data cart
        echo $this->show_cart();
	}
	function hapus_cart(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
	}
	function kirim_product(){
		$id = $this->input->post('item');
		$jumlah = $this->input->post('jumlah');
		$my_email = $this->input->post('my_email');
		$my_password = $this->input->post('my_password');
		$to_email = $this->input->post('to_email');
		$result =  $this->m_item->get_data_item($id);
		$nama = "";
		$harga = "";
		$jenis = "";
		$output = '';
		foreach($result as $key){
			$nama = $key->item_nama;
			$harga = $key->item_harga;
			$jenis = $key->item_jenis;

		}
		$this->load->library('phpmailer_lib');
        
		// PHPMailer object
		$mail = $this->phpmailer_lib->load();
		
		// Instantiation and passing `true` enables exceptions
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = $my_email;
		$mail->Password = $my_password;
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;
		
		$mail->setFrom($to_email, 'goodfellas');
		
		// Add a recipient
		$mail->addAddress($my_email);
		
		// Add cc or bcc 
		$mail->addCC($to_email);
		
		// Email subject
		$mail->Subject ="PESANAN PRODUCT/TREATMENT DARI PERUSAHAAN GOODFELLAS";
		
		// Set email format to HTML
		$mail->isHTML(true);
		// Email body content
	
		foreach ($this->cart->contents() as $items) {
			$no++;
			
			$output .='
				<table>
				<tr>
				  <th>Nama Item</th>
				  <th>Jenis Item</th>
				  <th>Harga Item</th>
				  <th>Jumlah Item</th>

				</tr>
                <tr>
					<td>'.$items['name'].'</td>
					<td>'.$items['jenis'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>    

				</tr>
				</table>
			';
			
			
		}

			$mail->Body = $output;

		// Send email
		if(!$mail->send()){
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			echo 'Message has been sent';
		}


		$this->cart->destroy();
		redirect('Admin/Master/Data/C_item');

	}

}
