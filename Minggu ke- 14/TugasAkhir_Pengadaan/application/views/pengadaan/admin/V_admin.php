        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Kelola Data User Aktif</h1>

          <div class="container-fluid">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Data User
    </button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Nama_User</th>
                    <th>Jenis_User</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <?php $i=1;?>
                    <?php foreach($users as $user) :  ?>
                    <td><?php echo $i++;?></td>   
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['nama_user']; ?></td>
                    <td><?php echo $user['jenis_user']; ?></td>
                    <td><a href="<?= base_url();?>beranda/ubahData/<?= $user['id'];?>"class="fas fa-edit fa-lg"></a> <a href="<?php echo base_url(); ?>beranda/hapusData/<?= $user['id'];?>" class="fas fa-trash-alt fa-lg"onclick= "return confirm('yakin?');"></a></td>
                </tr>
                <?php endforeach;?>
            </thead>
        </table>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>beranda/tambahData" method=post>
                    <div class="form-group">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama"required>
                        
                    </div>           
                    <label for="User">Username</label>
                    <input type="text" class="form-control" id="User" name="username" required>
                </div>           
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="password"required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis User</label>
                    <select class="form-control" id="jenis" name="jenis"required>
                    <option>Admin</option>
                    <option>Pemilik</option>
                    <option>Staf Gudang</option>
                    </select>
            </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role"required>
                      <option>0</option>
                      <option>1</option>
                    </select>
            </div>
                <div class="modal-footer">           
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
            <h6>NB : 0 Untuk Admin 1 : Untuk Gudang</h6>
          </div>
        </div>
      </div>
    </div>



</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
