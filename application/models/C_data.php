<?php
// Penduduk.php
class C_data extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT payment_type, (gross_amount*count(*))as 'total' from transaksi_mindtrans group by payment_type");
		return $data->result();
	}

    public function graph1()
	{
		$data1 = $this->db->query("SELECT data_sensor, jumlah from data_sensor group by data_sensor");
		return $data1->result();
	}

}