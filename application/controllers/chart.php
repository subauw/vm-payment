<?php
class chart extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('C_data');
	}
 
	public function sales_c()
	{
		$data['graph'] = $this->C_data->graph();
		$this->load->view('chart/sales_chart', $data);
	}

    public function sensor_c()
	{
		$data1['graph1'] = $this->C_data->graph1();
		$this->load->view('chart/sensor_chart', $data1);
	}
 
}