
        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Kelola Data Barang Gudang</h1>

          <div class="container-fluid">

          <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle float-right mb-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cetak
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?= base_url();?>beranda_pemilik/pdf">PDF</a>
                  
                </div>
          </div>

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
