<?php

class Loginpage extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();
        $this->load->model('M_admin');
        $this->load->library('form_validation','session');
    }

    public function index(){
   
    $this->form_validation->set_rules('username', 'Username', 'required',true);    
    $this->form_validation->set_rules('password', 'Password', 'required',true);    
    if($this->form_validation->run()==FALSE){

    $data["judul"]='Halaman Login';    
    $this->load->view('templates/login',$data);
    
  }else
  {
      $this->login();
  }

}   

        private function login(){

            
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user=$this->db->get_where('user' ,array('username' => $username,'password' =>md5($password)))->row_array();
            
                if($user){
                     $data=[
                    'username' => $user["username"],
                    
                ];
                    $this->session->set_userdata($data);
                    if($user["role"]==0){
                 
                    redirect('beranda/index'); 
                    
                }else if($user["role"]==2){
                    redirect('beranda_pemilik/index');
                }else{
                    redirect('beranda_gudang/index');
                }

               
            }else{
                $this->session->set_flashdata('fail', '<div class="alert alert-danger" role="alert">Password/Username Salah</div>');
                redirect('loginpage');
            }
       
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('loginpage');
    }
}
