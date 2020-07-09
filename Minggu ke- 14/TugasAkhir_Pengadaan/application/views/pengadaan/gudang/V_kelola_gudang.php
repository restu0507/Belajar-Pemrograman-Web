              
       
        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Kelola Data Barang Gudang</h1>

          <div class="container-fluid">

        <table class="table mt-3">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>jenis Barang</th>
                    <th>Stock Barang</th>
                    <th>Harga Barang</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                        <?php $i=1;?>
                        <?php foreach( $barang as $brg) :  ?>
                        <td><?= $i++;?></td>   
                        <td><?= $brg['kode_barang']; ?></td>
                        <td><?= $brg['nama_barang']; ?></td>
                        <td><?= $brg['jenis_barang']; ?></td>
                        <td><?=$brg["stock_barang"]; ?></td>
                        <td><?= $brg['harga_barang']; ?></td>
                        <td><a href="<?= base_url();?>beranda_gudang/getUbahData/<?= $brg['kode_barang'];?>"class="fas fa-edit fa-lg"></a> <a href="<?php echo base_url(); ?>beranda_gudang/hapusData/<?= $brg['kode_barang'];?>" class="fas fa-trash-alt fa-lg"onclick= "return confirm('yakin?');"></a></td>
                   </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
