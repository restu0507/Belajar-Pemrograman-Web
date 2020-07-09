 <!-- Begin Page Content -->
<div class="container-fluid mt-5">

                <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Update Data Barang Masuk</h1>
         <div class="container-fluid">
              <?php foreach ($masuk as $msk) : ?>
            <form action="<?=base_url('beranda_gudang/UpdateDataMasuk/').$msk["kode_nota"];?>" method="post">
            <div class="form-group">
                <label for="kode">Kode Nota</label>
                <input type="text" class="form-control" id="kode" name="kodenota" value="<?=$msk["kode_nota"];?>">

            </div>
            <div class="form-group">
                <label for="kd_pesan">Kode Pesan</label>
                <select class="form-control" id="kd_pesan" name="kodepesan"value="<?=$msk["kode_pesan"];?>">
                    <?php foreach ($pesan as $psn) :?>

                    <option><?=$psn["kode_pesan"];?></option>

                    <?php endforeach;?>

                </select>

              </div>  
            <div class="form-group">
                <label for="tglmsk">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tglmsk" name="tanggalmasuk"value="<?=$msk["tanggal_masuk"];?>">
            </div>

            <div class="form-group">
                <label for="kd_pesan">Kode suplier</label>
                <select class="form-control" id="kd_suplier" name="kodesuplier"value="<?=$msk["kode_suplier"];?>">
                    <?php foreach ($suplier as $sup) :?>

                    <option><?=$sup["kode_suplier"];?></option>

                    <?php endforeach;?>

                </select>

              </div>
            <div class="form-group">
                <label for="kd_pesan">Kode barang</label>
                <select class="form-control" id="kd_barang" name="kodebarang"value="<?=$msk["kode_barang"];?>">
                    <?php foreach ($barang as $brg) :?>

                    <option><?=$brg["kode_barang"];?></option>

                    <?php endforeach;?>

                </select>

              </div>

            <div class="form-group">
                <label for="jmlbrg">Jumlah Barang</label>
                <input type="text" class="form-control" id="jmlbrg" name="jumlahbarang" value="<?=$msk["jumlah_barang"];?>">

            </div>
            <button class="btn btn-primary mt-3" type="submit">Update</button>
            <button class="btn btn-danger  mt-3 ml-3" type="reset">Cancel</button>
        </form>
                     <?php endforeach;?>
    </div>
</div>
                    
