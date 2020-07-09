<?php

class Beranda_pemilik extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();
         if(!$this->session->userdata('username')){
             $this->session->set_flashdata('fail', '<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu</div>');
            redirect('loginpage');
        }
        $this->load->model('M_pemilik');
        $this->load->model('M_gudang');
    }

    public function index(){

        $judul["judul"]='Halaman Dashboard Pemilik';
        $data["pemilik"]=$this->M_pemilik->TampilDataSuplier();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_pemilik',$data);
        $this->load->view('templates/footer');
    }

    public function inputView(){
        $judul["judul"]="Halaman Input Data Suplier";
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_input_pemilk');
        $this->load->view('templates/footer');

    }

    public function inputDataSuplier(){

        $this->M_pemilik->inputData();
        redirect('beranda_pemilik/index');
    }

    public function updateView(){
        $judul["judul"]="Halaman Kelola Data Suplier";
        $data["pemilik"]=$this->M_pemilik->TampilDataSuplier();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_pemilik_kelola',$data);
        $this->load->view('templates/footer');
    }

    public function ubahData($kode){
        $where = array('kode_suplier'=> $kode);
        $data["pemilik"]=$this->M_pemilik->editData($where,'suplier')->result_array();
        $judul["judul"]='Halaman Ubah Data suplier';
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_update_pemilk',$data);
        $this->load->view('templates/footer');


    }

     public function dataUpdate($kode){

      $this->M_pemilik->updateData($kode);
      redirect('beranda_pemilik/index');
        
    }

    public function hapusData($kode){

        $this->M_pemilik->deleteData($kode);

        redirect('beranda_pemilik/index');
    }

    /*Bagian Cetak Laporan Data */

    public function ViewBarang(){

        $judul["judul"]='Halaman Dashboard Cetak';
        $data["barang"]=$this->M_gudang->tampilData();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_kelola_gudang',$data);
        $this->load->view('templates/footer');

    }

    public function ViewPemesanan(){

        $judul["judul"]='Halaman Cetak Pesanan';
        $data["pesan"]=$this->M_gudang->tampilDataPesanan();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_kelola_pemesanan_gudang',$data);
        $this->load->view('templates/footer');

    }

    public function ViewBarangMasuk(){

        $judul["judul"]='Halaman Cetak Pemesanan';
        $data["masuk"]=$this->M_gudang->tampilDataMasuk();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/pemilik/sidebar_pemilik');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/pemilik/V_barang_masuk',$data);
        $this->load->view('templates/footer');

    }

    public function pdf(){

       
        $data["barang"]=$this->M_gudang->tampilData();
        $html = $this->load->view('pengadaan/pemilik/cetak_output/cetak_laporan_barang',$data,TRUE);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetTitle('hello');
        $mpdf->WriteHTML($html);
        $mpdf->Output('databarang.pdf','D');
    }

    public function pdf2(){

       
        $data["masuk"]=$this->M_gudang->tampilDataMasuk();
        $html = $this->load->view('pengadaan/pemilik/cetak_output/cetak_data_barang_masuk',$data,TRUE);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetTitle('hello');
        $mpdf->WriteHTML($html);
        $mpdf->Output('barang_masuk.pdf','D');
    }

    public function pdf3(){

       
        $data["pesan"]=$this->M_gudang->tampilDataPesanan();
        $html = $this->load->view('pengadaan/pemilik/cetak_output/cetak_data_pemesanan',$data,TRUE);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetTitle('hello');
        $mpdf->WriteHTML($html);
        $mpdf->Output('pemesanan_barang.pdf','D');
    }
}
