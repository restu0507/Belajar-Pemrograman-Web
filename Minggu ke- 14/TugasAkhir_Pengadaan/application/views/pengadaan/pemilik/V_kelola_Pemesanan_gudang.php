        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Kelola Pemesanan Barang </h1>

          <div class="container-fluid">

          <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle float-right mb-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cetak
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?= base_url();?>beranda_pemilik/pdf3">PDF</a>
                  
                </div>
          </div>

        <table class="table mt-3">
            <thead>
                <tr>

                    <th>No</th>
                    <th>Kode Pesan</th>
                    <th>Tanggal Pesan</th>
                    <th>Kode Suplier </th>
                    <th>Kode Barang</th>
                    <th>Jumlah Barang</th>
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
        
                      </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
