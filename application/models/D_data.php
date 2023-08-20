<?php
// Penduduk.php
class D_data extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function d_sales_m()
	{
		$dta1 = $this->db->query("SELECT sum(gross_amount) as 'total1' FROM `transaksi_mindtrans` group by month(transaction_time) order by sum(gross_amount) asc limit 1;");
		return $dta1->result();
	}

	public function d_sales_ech()
	{
		$dta2 = $this->db->query("SELECT sum(gross_amount) as 'echannel' FROM `transaksi_mindtrans` WHERE payment_type = 'echannel';");
		return $dta2->result();
	}

	public function d_sales_qr()
	{
		$dta3 = $this->db->query("SELECT sum(gross_amount) as 'qr' FROM `transaksi_mindtrans` WHERE payment_type = 'qris';");
		return $dta3->result();
	}

	public function d_sales_tf()
	{
		$dta4 = $this->db->query("SELECT sum(gross_amount) as 'transfer' FROM `transaksi_mindtrans` WHERE payment_type = 'bank_transfer';");
		return $dta4->result();
	}

	public function d_sensor_stock()
	{
		$dta5 = $this->db->query("SELECT data_sensor, jumlah from data_sensor group by data_sensor");
		return $dta5->result();
	}
}
