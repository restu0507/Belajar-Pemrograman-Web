<?php

class M_gudang extends CI_Model
{
     /* Bagian Data Barang*/

    public function tampilData()
    {
       return $this->db->get('barang')->result_array();
    }

    public function insertData(){
        $data= array(
            'kode_barang'       => $this->input->post('kodebarang'),
            'nama_barang'       => $this->input->post('namabarang'),
            'jenis_barang'      => $this->input->post('jenisbarang'),
            'stock_barang'      => $this->input->post('stockbarang'),
            'harga_barang'      => $this->input->post('hargabarang'),

        );

        $this->db->insert('barang',$data);
        redirect('beranda_gudang/index');
        
    }

    public function deleteData($kode){
        $this->db->where('kode_barang', $kode);
        $this->db->delete('barang');
    }

    public function editData($where){
        return $this->db->get_where('barang',$where);

    }
    public function updateData($kode){

      $data= array(
            'kode_barang'       => $this->input->post('kodebarang'),
            'nama_barang'       => $this->input->post('namabarang'),
            'jenis_barang'      => $this->input->post('jenisbarang'),
            'stock_barang'      => $this->input->post('stockbarang'),
            'harga_barang'      => $this->input->post('hargabarang'),
        );

        $this->db->where('kode_barang',$kode);
        $this->db->set($data);
        $this->db->update('barang');
    }

    /* Akhir Bagian Data Barang*/

    /*------------------------------------------------------------------------------------------------------*/

    /* Awal Bagian Pemesanan Barang*/

     public function tampilDataPesanan()

    {
       return $this->db->get('pemesanan')->result_array();
    }

    public function insertDataPesan(){
        $data= array(
            'kode_pesan'          => $this->input->post('kodepesan'),
            'tanggal_pesan'       => $this->input->post('tanggalpesan'),
            'kode_suplier'         => $this->input->post('kodesuplier'),
            'kode_barang'         => $this->input->post('kodebarang'),
            'jumlah_barang'       => $this->input->post('jumlahbarang'),
        );

        $this->db->insert('pemesanan',$data);
        redirect('beranda_gudang/ViewDataPesanan');
        
    }

     public function deleteDataPesan($kode){
        $this->db->where('kode_pesan', $kode);
        $this->db->delete('pemesanan');
    }

    public function editDataPesan($where){
        return $this->db->get_where('pemesanan',$where);

    }
    public function updateDataPesan($kode){

      $data= array(
            'kode_pesan'          => $this->input->post('kodepesan'),
            'tanggal_pesan'       => $this->input->post('tanggalpesan'),
            'jumlah_barang'       => $this->input->post('jumlahbarang'),
        );

         $this->db->where('kode_pesan',$kode);
         $this->db->set($data);
         $this->db->update('pemesanan');   
    }

    /* Akhir Bagian Data Barang*/

    /*------------------------------------------------------------------------------------------------------*/


    /* Awal Bagian Barang Masuk*/

    public function tampilDataMasuk()
    {
       return $this->db->get('barang_masuk')->result_array();
    }

    public function insertBarangMasuk(){


        
        $data= array(
            'kode_nota'        => $this->input->post('kodenota'),
            'kode_pesan'       => $this->input->post('kodepesan'),
            'tanggal_masuk'    => $this->input->post('tanggalmsk'),
            'kode_suplier'     => $this->input->post('kodesuplier'),
            'kode_barang'      => $this->input->post('kodebarang'),
            'jumlah_barang'    => $this->input->post('jumlahbarang'),
        );

        
        $this->db->insert('barang_masuk',$data);
        redirect('beranda_gudang/tampilDataMasuk');
        
    }

    public function deleteDataMasuk($kode){
        $this->db->where('kode_nota', $kode);
        $this->db->delete('barang_masuk');
    }

    public function editDataMasuk($where){
        return $this->db->get_where('barang_masuk',$where);

    }
    public function updateMasukData($kode){

      $data= array(
            'kode_nota'         => $this->input->post('kodenota'),
            'kode_pesan'        => $this->input->post('kodepesan'),
            'tanggal_masuk'     => $this->input->post('tanggalmasuk'),
            'kode_suplier'      => $this->input->post('kodesuplier'),
            'kode_barang'       => $this->input->post('kodebarang'),
            'jumlah_barang'     => $this->input->post('jumlahbarang'),
        );

        $this->db->where('kode_nota',$kode);
        $this->db->set($data);
        $this->db->update('barang_masuk');
    }

     public function tampilDataSuplier()
    {
       return $this->db->get('suplier')->result_array();
    }

}