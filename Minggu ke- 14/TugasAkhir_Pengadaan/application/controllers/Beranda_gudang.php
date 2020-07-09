<?php

class Beranda_gudang extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();
        if(!$this->session->userdata('username')){
            $this->session->set_flashdata('fail', '<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu</div>');
            redirect('loginpage');
        }
        $this->load->model('M_gudang');
        $this->load->model('M_pemilik');
    }

    /* Bagian Data Barang*/

    public function index(){

        $judul["judul"]='Halaman Dashboard User';
        $data["barang"]=$this->M_gudang->tampilData();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_gudang',$data);
        $this->load->view('templates/footer');

    }
    public function viewpemesanan(){
        $judul["judul"]='Halaman Dashboard User';
        $data["pesan"]=$this->M_gudang->tampilDataPesanan();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/View_pemesanan',$data);
        $this->load->view('templates/footer');

    }
    public function viewbarangmasuk(){
        $judul["judul"]='Halaman Dashboard User';
        $data["masuk"]=$this->M_gudang->tampilDataMasuk();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/View_barangmasuk',$data);
        $this->load->view('templates/footer');

    }

    public function inputView(){
        $judul["judul"]='Halaman Input Barang';
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_input_gudang');
        $this->load->view('templates/footer');
    }

    public function inputData(){
        $this->M_gudang->insertData()->getResultArray();

    }

    public function updateView(){

        $judul["judul"]='Halaman Kelola Barang';
        $data["barang"]=$this->M_gudang->tampilData();
        $data["masuk"]=$this->M_gudang->tampilDataMasuk();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_kelola_gudang',$data);
        $this->load->view('templates/footer');

    }

    public function hapusData($kode){
        $this->M_gudang->deleteData($kode);
        redirect('beranda_gudang/updateView');
    }

    public function getUbahData($kode){
        $where = array('kode_barang'=> $kode);
        $data["barang"]=$this->M_gudang->editData($where,'barang')->result_array();
        $judul["judul"]='Halaman Ubah Data Barang';
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_Input_update_gudang',$data);
        $this->load->view('templates/footer');


    }

     public function dataUpdate($kode){

      $this->M_gudang->updateData($kode);
      redirect('beranda_gudang/index');
        
    }

    /* Akhir Bagian Data Barang*/

    /*------------------------------------------------------------------------------------------------------*/

    /* Awal Bagian Pemesanan Barang*/

     public function viewDataPesanan(){

        $judul["judul"]='Halaman Kelola Pesanan';
        $data["pesan"]=$this->M_gudang->tampilDataPesanan();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_kelola_pemesanan_gudang',$data);
        $this->load->view('templates/footer');

    }

    
    public function inputViewPesan(){
        $judul["judul"]='Halaman Input Pemesanan Barang';
        $data["barang"]=$this->M_gudang->tampilData();
        $data["pemilik"]=$this->M_pemilik->TampilDataSuplier();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_input_pesanan_gudang ',$data);
        $this->load->view('templates/footer');
    }
    
    public function inputDataPesan(){
        $this->M_gudang->insertDataPesan()->getResultArray();
        
    }

     public function hapusDataPesan($kode){
        $this->M_gudang->deleteDataPesan($kode);
        redirect('beranda_gudang/ViewDataPesanan');
    }

    public function getUbahDataPesan($kode){
        $where = array('kode_pesan'=> $kode);
        $data["pesan"]=$this->M_gudang->editDataPesan($where,'pemesanan')->result_array();
        $data["barang"]=$this->M_gudang->tampilData();
        $judul["judul"]='Halaman Ubah Data Pemesanan Barang';
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_update_pesanan_gudang',$data);
        $this->load->view('templates/footer');
        


    }

    public function dataUpdatePesan($kode){

      $this->M_gudang->updateDataPesan($kode);
      redirect('beranda_gudang/viewDataPesanan');

    }

    /* Bagian  Barang Masuk*/

    public function tampilDataMasuk(){

        $judul["judul"]='Halaman Dashboard User';
        $data["masuk"]=$this->M_gudang->tampilDataMasuk();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_kelola_barang_masuk',$data);
        $this->load->view('templates/footer');

    }

    public function inputViewMasuk(){
        $judul["judul"]='Halaman Input Barang Masuk';
        $data["barang"]=$this->M_gudang->tampilData();
        $data["pesan"]=$this->M_gudang->tampilDataPesanan();
        $data["pemilik"]=$this->M_pemilik->TampilDataSuplier();
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_input_barang_masuk',$data);
        $this->load->view('templates/footer');
    }

    public function inputDataMasuk(){
        $this->M_gudang->insertBarangMasuk()->getResultArray();

    }
    public function hapusMasukData($kode){
        $this->M_gudang->deleteDataMasuk($kode);
        redirect('beranda_gudang/tampilDataMasuk');
    }

    public function UbahMasukData($kode){
        $where = array('kode_nota'=> $kode);
        $data["pesan"]=$this->M_gudang->tampilDataPesanan();
        $data["barang"]=$this->M_gudang->tampilData();
        $data["suplier"]=$this->M_gudang->tampilDataSuplier();
        $data["masuk"]=$this->M_gudang->editDataMasuk($where,'barang_masuk')->result_array();
        $judul["judul"]='Halaman Ubah Data Barang';
        $this->load->view('templates/header',$judul);
        $this->load->view('pengadaan/gudang/sidebar_gudang');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/gudang/V_update_barang_masuk',$data);
        $this->load->view('templates/footer');


    }

     public function UpdateDataMasuk($kode){

      $this->M_gudang->updateMasukData($kode);
      redirect('beranda_gudang/tampilDataMasuk');
        
    }
}
    
    

