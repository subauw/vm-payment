<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
        $this->load->helper('url');
	}
 
	function sales(){
		$data['transaksi_mindtrans'] = $this->M_data->sales();
		$this->load->view('tabel/sales',$data);
	}

    function sensor(){
		$data['data_sensor'] = $this->M_data->sensor();
		$this->load->view('tabel/sensor',$data);
	}

	function generate(){
		$this->load->view('laporan/generate');
	}

	function dashboard(){
		$this->load->view('dashboard/dashboard');
	}
}