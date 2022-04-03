<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "<b><h2>Selamat datang... selamat belajar web progamming</h2><b>";
    }

    
       /* $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1-> jumlah ($n1, $n2);
        echo "hasil Penjumlahan dari " .  $n1 . " + " . $n2 . " = " . $hasil;
        */
        public function penjumlahan($n1, $n2)
        {
        $this->load->model(' Model_latihan1');
        
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-Latihan1',$data);

    }   
}    
    


