<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pembayaran extends CI_Controller {

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
		$data['cabang'] = $this->m_cabang->getCabang();
		$data['data_treatment'] = $this->m_treatment->getTreatment();
		$data['data_customer'] = $this->m_customer->getCustomer();
		$data['data_member'] = $this->m_member->getMember();
		$data['data_antrian'] = $this->m_antrian->get_proAntrian();
		$data['data_item'] = $this->m_item->getItem();
		$data['data_barberman'] = $this->m_barberman->getBarberman();

		$this->load->view('Admin/pembayaran',$data); 
	}
	public function get_pembayaran()
	{
		$cabang = $this->input->post('cabang');
		$data['data_product'] = $this->m_product->getProduct();
		$data['cabang'] = $this->m_cabang->getCabang();
		$data['data_treatment'] = $this->m_treatment->getTreatment();
		$data['data_customer'] = $this->m_customer->getCustomer();
		$data['data_member'] = $this->m_member->getMember();
		$data['data_antrian'] = $this->m_antrian->get_proAntrian2($cabang);
		$data['data_item'] = $this->m_item->getItem();
		$this->load->view('Admin/pembayaran',$data); 
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
	public function prosesPembayaran(){
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
	public function detailPembayaran($id){
	    $result=$this->db->get_where('product',array("product_id"=>$id))->row();	
	    echo json_encode($result);
	}
	public function get_data_item(){
		$id = $this->input->post('id_item');
		$result =  $this->m_item->get_data_item($id);
	    foreach ($result as $key ) {
				
			if($key->item_jenis == "Product"){
				echo '<label> Jumlah Item </label>';
				echo '<input class = "form-control" type="number" name="item2" id="item2" >';
		}
		else {
			echo '<input class = "form-control" type="hidden" name="item2" id="item2" value ="1">';
		}
	
	}
}
	public function get_data_pelanggan($id){
		$result=$this->db->get_where('pelanggan',array("id_pelanggan"=>$id))->row();	
	    echo json_encode($result);;
	}
	public function add_item(){
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');
		$diskon = $this->input->post('diskon');
		$saldo = $this->input->post('saldo');
		$result =  $this->m_item->get_data_item($id);
		$nama = "";
		$harga = "";
		$jenis = "";
		$stock = "";

        foreach($result as $key){
			$nama = $key->item_nama;
			$harga = $key->item_harga;

			$jenis = $key->item_jenis;
			$stock = $key->item_jumlah;

		}
			if($jenis =="Product"){
				$data = array(
					'id'      => $id,
					'qty'     => $qty,
					'price'   => $harga,
					'name'    => $nama,
					'saldo'   => $saldo,
					'stock'   => $stock,
					'diskon'  => $diskon
			);
			$this->cart->insert($data);
			
			}
			else{
				$data = array(
					'id'      => $id,
					'qty'     => 1,
					'price'   => $harga,
					'name'    => $nama,
					'saldo'   => $saldo,
					'stock'   => $stock,
					'diskon'  => $diskon
			);
			$this->cart->insert($data);
			}


	
	}
	function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
		$no = 0;
		$diskon = 0;
		$saldo = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>

                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
			';
			$saldo = $items['saldo'];
			$diskon = $items['diskon'];
			
			
		}
		$output .= '
				<tr>
					<th colspan="3">Total </th>
					<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
				</tr>
			';
					$output .= '
					<tr>
						<th colspan="3">Diskon</th>
						<th colspan="2">'.'Rp '.$diskon.'</th>
					</tr>
				';
				$output .= '
				<tr>
					<th colspan="3">Saldo Anda</th>
					<th colspan="2">'.'Rp '.$saldo.'</th>
				</tr>
			';
        $output .= '
            <tr>
                <th colspan="3">Total Jumlah Bayar</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()-$saldo-$diskon).'</th>
            </tr>
        ';
		return $output;

	}
	function pembayaran(){
		
		$saldo = $this->input->post('saldo');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$email = $this->input->post('email_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$tipe_pelanggan = $this->input->post('tipe_pelanggan');
		$data_pelanggan =  $this->m_pelanggan->get_data_pelanggan($id_pelanggan);
		$point_pelanggan  = 0;
		$saldo_pelanggan = 0;
		foreach($data_pelanggan as $data){
			$point_pelanggan = $data->pelanggan_point;
			$saldo_pelanggan = $data->pelanggan_saldo;
		}
		$mailContent = '';
		$mailContent2= '';
		$service = $this->input->post('barberman');
		$report = $this->input->post('admin');
		$tanggal = date('y-m-d');
		$output = '';
		$no = 0;
		$diskon = 0;
		$saldo = 0;
		$temp = array();
        foreach ($this->cart->contents() as $items) {
		
		if($tipe_pelanggan == "Member"){
			if($items['name'] == "HAIRCUT" || $items['name'] == "HAIRCUT premium"){
				$point_pelanggan+=1;
				$data = array(
					'pelanggan_point'=>$point_pelanggan
				 );
				$this->db->where('id_pelanggan', $id_pelanggan);
				$this->db->update('pelanggan', $data);
			}
			else if($items['subtotal'] > 50000){
				$point_pelanggan+=1;
				$data = array(
					'pelanggan_point'=>$point_pelanggan
				);
				$this->db->where('id_pelanggan', $id_pelanggan);
				$this->db->update('pelanggan', $data);
			}
			else if($items['name'] == "HAIRCUT regular" || $items['name'] == "MAJOR POMADE" ){
				$point_pelanggan+=1;
				$data = array(
					'pelanggan_point'=>$point_pelanggan
				);
				$this->db->where('id_pelanggan', $id_pelanggan);
				$this->db->update('pelanggan', $data);
			}
		}
		if($point_pelanggan >= 15){
			$saldo_pelanggan+=50000;
			$point_pelanggan = 0;
			$data = array(
				'pelanggan_point'=>$point_pelanggan,
				'pelanggan_saldo'=>$saldo_pelanggan
			);
			$this->db->where('id_pelanggan', $id_pelanggan);
			$this->db->update('pelanggan', $data);
	}
			$saldo = $items['saldo'];
			$diskon = $items['diskon'];
			$temp[] = $items['name'];
			$stock =$items['stock']-$items['qty'];

            $data = array(
                    'id_item' => $items['id'],
                    'item_nama' => $items['name'],
                    'item_harga'     => $items['price'],
                    'item_jumlah' => $stock
			);
			$data2 = array(
				'id_pelanggan'=>$id_pelanggan,
				'report_item'=>$items['name'],
				'report_jumlah'=>$items['qty'],
				'tanggal' =>$tanggal

			);
			$this->m_report->detail_report($data2);

        $this->db->where('id_item', $items['id']);
		$this->db->update('item', $data); 
	    $saldo_pelanggan -= $saldo;
		$data_saldo = array(
			'pelanggan_saldo'=>$saldo_pelanggan
		);
		$this->db->where('id_pelanggan', $id_pelanggan);
		$this->db->update('pelanggan', $data_saldo);
		}
		$pemasukan = $this->cart->total()-$diskon-$saldo;
		$data = array(
			'report_pelanggan' =>$id_pelanggan,
			'report_pemasukkan' =>$pemasukan,
			'report_service' =>$service,
			'report_making' =>$report,
			'report_tanggal' =>$tanggal

		);
		$this->m_report->insertData($data);
		
		$this->load->library('phpmailer_lib');
        
		// PHPMailer object
		$mail = $this->phpmailer_lib->load();
		
		// Instantiation and passing `true` enables exceptions
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'alifprasetyoaji97@gmail.com';
		$mail->Password = 'mautauaja123';
		$mail->SMTPSecure = 'tls';
		$mail->Port     = 587;
		
		$mail->setFrom('alifprasetyoaji97@gmail.com', 'goodfellas');
		
		// Add a recipient
		$mail->addAddress("$email");
		
		// Add cc or bcc 
		$mail->addCC("$email");
		
		// Email subject
		$mail->Subject = 'Barbershop goodfellass';
		
		// Set email format to HTML
		$mail->isHTML(true);
		
		// Email body content
		foreach($temp as $val){

			$mailContent2 .= "	<tr>
			<th>Items  </th> <th> :</th> <th> ".$val." </th>	
			</tr>";

			}
		$mailContent .= "<h1>Report Pembayaran</h1>
				<table>
				".$mailContent2."
				<tr>
				<th>Tanggal </th>  <th>:</th> <th> ".$tanggal." </th>	
				</tr>
				<tr>
				<th>Nama </td>  <th>:</th> <th> ".$nama_pelanggan." </th>	
				</tr>
				<tr>
				</tr>
				<tr>
				<th>Saldo </th>  <th>:</th> <th> ".$saldo." </th>
				</tr>
				<tr>
				<th>Diskon</th>  <th>:</th> <th> ".$diskon."</th> 
				</tr>
				<tr>
				<th>Total Pembayaran</th> <th> :</th> <th> ".$pemasukan." </th>	
				</tr>
				<tr>
				<th>Service By </th> <th> :</th> <th> ".$service." </th>	
				</tr>
			
				</table>
			";
			
		
			$mail->Body = $mailContent;

		// Send email
		if(!$mail->send()){
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			echo 'Message has been sent';
		}


		$this->cart->destroy();
		redirect('Admin/C_pembayaran/index');
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
}
