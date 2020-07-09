<?php

class Users extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();
         if(!$this->session->userdata('username')){
             $this->session->set_flashdata('fail', '<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu</div>');
            redirect('loginpage');
        }


    }
    public function index(){
        $judul["judul"]="Halaman Edit Profile";
        $data=$this->db->get_where('user', array('username' =>$this->session->userdata('username')))->row_array();
        $this->load->view('templates/header',$judul);
        if($data["role"]==0){
            $this->load->view('templates/sidebar');
        }else if($data["role"]==2){
            $this->load->view('pengadaan/pemilik/sidebar_pemilik');

        }else{
            $this->load->view('pengadaan/gudang/sidebar_gudang');

        }
        $this->load->view('templates/topbar');
        $this->load->view('users/V_user');
        $this->load->view('templates/footer');

    }

    public function edit($id){
        $val=[
            'id'            => $this->input->post('id'),
            'nama_user'     => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'no_hp'         => $this->input->post('nohp'),
            'foto_profil'   => $this->input->post('foto'),
        ];

        $this->db->where('id',$id);
        $this->db->set($val);
        $this->db->update('user');
        redirect('users');
    }
}
