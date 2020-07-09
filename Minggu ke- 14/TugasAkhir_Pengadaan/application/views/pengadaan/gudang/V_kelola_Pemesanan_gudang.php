        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Kelola Pemesanan Barang </h1>

          <div class="container-fluid">

        <table class="table mt-3">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Kode Pesan</th>
                    <th>Tanggal Pesan</th>
                    <th>Kode Suplier </th>
                    <th>Kode Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                        <?php $i=1;?>
                        <?php foreach( $pesan as $psn) :  ?>
                        <td><?= $i++;?></td>   
                        <td><?= $psn['kode_pesan']; ?></td>
                        <td><?= $psn['tanggal_pesan']; ?></td>
                        <td><?= $psn['kode_suplier']; ?></td>
                        <td><?= $psn['kode_barang']; ?></td>
                        <td><?= $psn['jumlah_barang']; ?></td>
                        <td><a href="<?= base_url();?>beranda_gudang/getUbahDataPesan/<?= $psn['kode_pesan'];?>"class="fas fa-edit fa-lg"></a>  <a href="<?php echo base_url(); ?>beranda_gudang/hapusDataPesan/<?= $psn['kode_pesan'];?>" class="fas fa-trash-alt fa-lg"onclick= "return confirm('yakin?');"></a></td>
                   </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
