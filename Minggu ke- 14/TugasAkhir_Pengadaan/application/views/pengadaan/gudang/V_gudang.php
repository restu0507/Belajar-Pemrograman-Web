        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Data Barang Gudang</h1>

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
                </tr>
                <tr>
                        <?php $i=1;?>
                        <?php foreach( $barang as $brg) :  ?>
                        <td><?= $i++;?></td>   
                        <td><?= $brg['kode_barang']; ?></td>
                        <td><?= $brg['nama_barang']; ?></td>
                        <td><?= $brg['jenis_barang']; ?></td>
                        <td><?= $brg['stock_barang']; ?></td>
                        <td><?= $brg['harga_barang']; ?></td>
                   </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
