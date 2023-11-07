<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<h1>Selamat Datang</h1>";
        echo "Selamat Belajar Web Programming II";
        //$this->load->view('view-Latihan1);
    }
    public function penjumlahan($nilai1, $nilai2)
    {
        $this->load->model('Model_Latihan1');

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $this->Model_Latihan1->jumlah($nilai1, $nilai2);

        $this->load->view('view-latihan' , $data );
    }
}