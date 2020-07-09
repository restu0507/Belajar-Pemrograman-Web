        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> Kelola Data Barang Masuk</h1>

          <div class="container-fluid">

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle float-right mb-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cetak
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?= base_url();?>beranda_pemilik/pdf2">PDF</a>
                  
                </div>
          </div>

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

                  </tr>
                <?php endforeach;?>
            </thead>
        </table>

            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
