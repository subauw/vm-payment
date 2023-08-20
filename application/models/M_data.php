<?php 
 
class M_data extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	function sales(){
		return $this->db->get('transaksi_mindtrans')->result_array();
	}

	function sensor(){
		return $this->db->get('data_sensor')->result_array();
	}

}