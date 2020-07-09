<?php

class M_pemilik extends CI_Model
{
   
    public function TampilDataSuplier(){

        return $this->db->get('suplier')->result_array();
    }

    public function inputData(){
        $data=array(

            'kode_suplier'   => $this->input->post('kodesuplier'),
            'nama_suplier'   => $this->input->post('namasuplier'),
            'jenis_suplier'  => $this->input->post('jenissuplier'),
            'alamat_suplier' => $this->input->post('alamatsuplier'),
            'telp_suplier'   => $this->input->post('telponsuplier'),
        );

        $this->db->insert('suplier',$data);
    }

    public function editData($where){
        return $this->db->get_where('suplier',$where);

    }
    public function updateData($kode){

      $data= array(

            'kode_suplier'   => $this->input->post('kodesuplier'),
            'nama_suplier'   => $this->input->post('namasuplier'),
            'jenis_suplier'  => $this->input->post('jenissuplier'),
            'alamat_suplier' => $this->input->post('alamatsuplier'),
            'telp_suplier'   => $this->input->post('telponsuplier'),
        );

        $this->db->where('kode_suplier',$kode);
        $this->db->set($data);
        $this->db->update('suplier');
    }

    public function deleteData($kode){
        $this->db->where('kode_suplier', $kode);
        $this->db->delete('suplier');
    }
}
