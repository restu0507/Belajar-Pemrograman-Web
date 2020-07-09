<?php

class Beranda extends CI_Controller
{
  /* Tempat penyimpanan file autoload */

  public function __Construct(){
        parent::__Construct();
        if(!$this->session->userdata('username')){
          $this->session->set_flashdata('fail', '<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu</div>');
            redirect('loginpage');
        }
        $this->load->model('M_admin');
        $this->load->library('form_validation');

  }
  
    /* Controller Tampil Data */
    public function index()
    {

        $judul['judul']='Halaman Dashboard Admin';
        $data['users']=$this->M_admin->tampilData();
        $this->load->view('templates/header',$judul);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pengadaan/admin/V_admin',$data);
        $this->load->view('templates/footer');
    }

    /* Controller Tambah Data */

    public function tambahData(){

    $this->M_admin->insertData()->getResultArray();
  }

    /* Controller Hapus Data */

    public function hapusData($id){
      $this->M_admin->deleteData($id);
      redirect('beranda/index');

    }

    /* Mengambil data edit berdasarkan id */

    public function ubahData($id){
      $where = array('id' => $id);
      $data['users']=$this->M_admin->editData($where,'user')->result_array();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar');
      $this->load->view('pengadaan/admin/V_UpdateAdmin',$data);
      $this->load->view('templates/footer');

    }

    /* Controller Update Data */
    
    public function dataUpdate($id){

      $this->M_admin->updateData($id);
      redirect('beranda/index');
        
    }
}


