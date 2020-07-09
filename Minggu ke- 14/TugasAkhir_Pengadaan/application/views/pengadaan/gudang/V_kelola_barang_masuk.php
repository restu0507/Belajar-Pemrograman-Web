        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Kelola Data Barang Masuk</h1>

          <div class="container-fluid">

        <table class="table mt-3">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Kode Nota</th>
                    <th>Kode Pesan</th>
                    <th>Tanggal Masuk</th>
                    <th>Kode Suplier</th>
                    <th>Kode Barang</th>
                    <th>jumlah Barang</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                        <?php $i=1;?>
                        <?php foreach( $masuk as $msk) :  ?>
                        <td><?= $i++;?></td>   
                        <td><?= $msk['kode_nota']; ?></td>
                        <td><?= $msk['kode_pesan']; ?></td>
                        <td><?= $msk['tanggal_masuk']; ?></td>
                        <td><?= $msk['kode_suplier']; ?></td>
                        <td><?= $msk['kode_barang']; ?></td>
                        <td><?= $msk['jumlah_barang']; ?></td>
                        <td><a href="<?= base_url();?>beranda_gudang/UbahMasukData/<?= $msk['kode_nota'];?>"class="fas fa-edit fa-lg"></a> <a href="<?php echo base_url(); ?>beranda_gudang/hapusMasukData/<?= $msk['kode_nota'];?>" class="fas fa-trash-alt fa-lg"onclick= "return confirm('yakin?');"></a></td>
                   </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
