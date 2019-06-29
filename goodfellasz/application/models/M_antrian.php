<?php

class M_antrian extends CI_Model{

	function getCampaign(){
        //$data_karyawan = $this->db->query("select * from data_karyawan;");
		$data_antrian = $this->db->get('antrian')->result(); 
		return $data_antrian;
	}
	function deleteData($del){
		$this->db->where($del);
		$this->db->delete('antrian');
	}
	public function insertData($data){ 
		$this->db->insert('antrian',$data);
	}
	public function updateData($where,$data){	
		$this->db->where($where);
		$this->db->update('antrian',$data);
	}
	public function get_antrian(){
		//$this->db->from('antrian');
        //return $this->db->get()->result();
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = antrian.id_pelanggan');
 		$this->db->order_by('antrian_jam', 'asc');
 		$data_antrian = $this->db->get('antrian')->result(); 
		return $data_antrian;  
	}
	public function get_proAntrian(){
		//$this->db->from('antrian');
        //return $this->db->get()->result();
        $this->db->select('*');
		$this->db->from('barberman');
		$this->db->join('antrian', 'barberman.id_barberman = antrian.barberman_id');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = antrian.id_pelanggan');
		$this->db->where(array('antrian.antrian_status'=>"process"));
 		$this->db->order_by('antrian_kursi', 'asc');
 		$query = $this->db->get()->result();
		return $query;  
	}
	public function get_proAntrian2($cabang){
		//$this->db->from('antrian');
        //return $this->db->get()->result();
        $this->db->select('*');
		$this->db->from('barberman');
		$this->db->join('antrian', 'barberman.id_barberman = antrian.barberman_id');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = antrian.id_pelanggan');
		$this->db->where(array(
			'antrian.antrian_status'=>"process",
			'antrian.antrian_cabang '=>"$cabang"
		));
 		$this->db->order_by('antrian_kursi', 'asc');
 		$query = $this->db->get()->result();
		return $query;  
	}
	public function get_antrian2($cabang){
		$this->db->from('antrian');
		$this->db->where('antrian_cabang',$cabang);

        return $this->db->get()->result(); 
	}
	function cek_data($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	public function get_data_antrian(){
		//$this->db->from('antrian');
        //return $this->db->get()->result();
		$this->db->from('antrian');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = antrian.id_pelanggan');
 		$query = $this->db->get()->result();
		return $query;  
	}
}
?>