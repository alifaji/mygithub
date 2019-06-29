<?php
 
 class M_pelanggan extends CI_Model{
 
 	function getPelanggan(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
        $data_item = $this->db->get('pelanggan')->result(); 
        return $data_item;
    }
    public function getMember()
    {
    	$this->db->where(array("pelanggan_tipe"=>"Member"));
 		$data_member = $this->db->get('pelanggan')->result(); 
		return $data_member;
    }
    public function getCustomer()
    {
    	$this->db->where(array("pelanggan_tipe"=>"Customer"));
 		$data_customer = $this->db->get('pelanggan')->result(); 
		return $data_customer;
    }
    function deleteData($del){
    	$this->db->where($del);
 		$this->db->delete('pelanggan');
    }
 	public function insertData($data){
 		$this->db->insert('pelanggan',$data);
 	}
 	public function updateData($where,$data){	
		   $this->db->where($where);
		   $this->db->update('pelanggan',$data);
 	}
    function cek_data($table,$where){       
        return $this->db->get_where($table,$where);
    }
	function get_data_pelanggan($id_pelanggan){
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan',$id_pelanggan);
		$query = $this->db->get();
		return $query->result();
		}
		function get_data(){
		
			$this->db->from('report');
			$this->db->join('pelanggan','pelanggan.id_pelanggan=report.report_pelanggan');
			$this->db->join('report_detail','report_detail.id_pelanggan=report.report_pelanggan');
			$this->db->group_by('report_tanggal');
			return $this->db->get()->result(); 
		}
		function get_report(){
		
			$this->db->from('report');
			$this->db->join('pelanggan','pelanggan.id_pelanggan=report.report_pelanggan');
			$this->db->join('report_detail','report_detail.id_pelanggan=report.report_pelanggan');
			$this->db->group_by('pelanggan.id_pelanggan');
			return $this->db->get()->result(); 
		}
		function detail_report($id){
		
			$this->db->from('report_detail');
			$this->db->where('id_pelanggan',$id);
			return $this->db->get()->result(); 
		}
		function get_data_where($id,$id2){
		
			$this->db->from('report_detail');
			$data = array(
				'report_detail.tanggal'=>$id2,			
				'report_detail.id_pelanggan'=>$id
			);
			$this->db->where($data);
			return $this->db->get()->result(); 
		}
 }
 ?>