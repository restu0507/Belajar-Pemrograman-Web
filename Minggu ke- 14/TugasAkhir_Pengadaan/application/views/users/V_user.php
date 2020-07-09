<?php 
  $data=$this->db->get_where('user', array('username' =>$this->session->userdata('username')))->row_array();
?>


<!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Profil Data User</h1>

            <div class="container-fluid">
              <div class="card" style="width: 18rem;">
                    <img src="<?= base_url();?>assets/img/<?=$data["foto_profil"];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php print_r($data["username"]);?></h5>
                        <p class="card-text">Nama : <?php print_r($data["nama_user"]);?></p>
                        <p class="card-text">Alamat : <?php print_r($data["alamat"]);?></p>
                        <p class="card-text">No Hp : <?php print_r($data["no_hp"]);?></p>
                        <a href="#" class="badge badge-primary float-right" data-toggle="modal" data-target="#exampleModal">Edit Profil</a>
                    </div>
             </div>

             

            </div>
     </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengaturan Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('users/edit/'.$data["id"]);?>" method="post">
          <div class="form-group">
           <input type="hidden" class="form-control"  name="id" value="<?php print_r($data["id"]);?>">
            <label for="Nama">Nama </label>
            <input type="text" class="form-control" id="Nama" name="nama" value="<?php print_r($data["nama_user"]);?>">
        </div>
          <div class="form-group">
            <label for="Alamat">Alamat </label>
            <input type="text" class="form-control" id="Alamat" name="alamat" value="<?php print_r($data["alamat"]);?>">
        </div>
          <div class="form-group">
            <label for="No_Hp">No Hp </label>
            <input type="text" class="form-control" id="No_Hp" name="nohp" value="<?php print_r($data["no_hp"]);?>">
        </div>
          <div class="form-group">
            <label for="foto">Upload Foto Profil </label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>