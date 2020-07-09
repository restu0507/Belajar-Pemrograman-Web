<?php

class M_admin extends CI_Model
{
    public function tampilData()
    {
       return $this->db->get('user')->result_array();
    }

    public function insertData(){
        $data= array(
            'id'            => '',
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'nama_user'     => $this->input->post('nama'),
            'jenis_user'    => $this->input->post('jenis'),
            'role'          => $this->input->post('role'),
        );

        $this->db->insert('user',$data);
        redirect('beranda/index');
        
    }

    public function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function editData($where){
        return $this->db->get_where('user',$where);

    }
    public function updateData($id){

      $data= array(
            'id'            => $this->input->post('id'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'nama_user'     => $this->input->post('nama'),
            'jenis_user'    => $this->input->post('jenis'),

        );

        $this->db->where('id',$id);
        $this->db->set($data);
        $this->db->update('user');
    }
}
