        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Data Suplier</h1>

          <div class="container-fluid">

        <table class="table mt-3">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Kode Suplier</th>
                    <th>Nama Suplier</th>
                    <th>jenis Suplier</th>
                    <th>Alamat Suplier</th>
                    <th>Telpon Suplier</th>
                </tr>
                <tr>
                    <?php $i=1;?>
                        <?php foreach($pemilik as $pml) :  ?>
                        <td><?= $i++;?></td>   
                        <td><?= $pml['kode_suplier']; ?></td>
                        <td><?= $pml['nama_suplier']; ?></td>
                        <td><?= $pml['jenis_suplier']; ?></td>
                        <td><?= $pml['alamat_suplier']; ?></td>
                        <td><?= $pml['telp_suplier']; ?></td>
                   </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
