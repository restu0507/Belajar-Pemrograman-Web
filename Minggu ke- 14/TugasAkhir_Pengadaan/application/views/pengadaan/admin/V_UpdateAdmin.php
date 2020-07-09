    <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

    <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Data User Aktif</h1>

          <div class="container-fluid">
    
      <?php foreach ($users as $user):?>

    <form action="<?= base_url('beranda/dataUpdate/'.$user["id"]);?>" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $user["id"];?>">
                <div class="form-group" >
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user["nama_user"];?>">
                </div>           
                <label for="User">Username</label>
                <input type="text" class="form-control" id="User" name="username" value="<?= $user["username"];?>">
            </div>           
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="password"value="<?= $user["password"];?>">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis User</label>
                <select class="form-control" id="jenis" name="jenis" value="<?= $user["username"];?>">
                <option>Admin</option>
                <option>Pemilik</option>
                <option>Staf Gudang</option>
                </select>
        </div>

        <button class="btn btn-primary mt-2" type ="submit">Update</button>
        <button class="btn btn-danger mt-2 ml-2" type ="reset">Cancel</button>
    </form>
         <?php endforeach; ?>

      </div>
</div>
