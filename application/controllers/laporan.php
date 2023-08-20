<?php
require FCPATH. '/vendor/autoload.php';
    class laporan extends CI_Controller{
        function __construct(){
            parent::__construct();		
            $this->load->model('M_data');
            $this->load->helper('url');
        }

        public function print_sales(){
            $store['transaksi_mindtrans']=$this->M_data->sales();
            $mpdf = new \Mpdf\Mpdf();
            $html = $this->load->view('laporan/Laporan_Penjualan',$store,true);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }

        public function print_sensor(){
            $store['data_sensor']=$this->M_data->sensor();
            $mpdf = new \Mpdf\Mpdf();
            $html = $this->load->view('laporan/Laporan_Sensor',$store,true);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }
    }
