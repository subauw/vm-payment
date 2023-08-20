<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('D_data');
    }

    public function index()
    {
        $dat = array();
        $m["node"] = "mufid";
        $dat["total1"] = $this->D_data->d_sales_m();
        $dat["total2"] = $this->D_data->d_sales_ech();
        $dat["total3"] = $this->D_data->d_sales_qr();
        $dat["total4"] = $this->D_data->d_sales_tf();

        $this->load->view('dashboard/dashboard', $dat);

        //print_r($dat[0][0]->total1);
    }
}
