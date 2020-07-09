 <!-- Begin Page Content -->
<div class="container-fluid mt-5">

                <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Update Data Pemesanan Barang Gudang</h1>
         <div class="container-fluid">
              <?php foreach ($pesan as $psn) : ?>
            <form action="<?=base_url('beranda_gudang/dataUpdatePesan/').$psn["kode_pesan"];?>" method="post">
            <div class="form-group">
                <label for="kode">Kode Pesan</label>
                <input type="text" class="form-control" id="kode" name="kodepesan" value="<?=$psn["kode_pesan"];?>">

            </div>
            <div class="form-group">
                <label for="tglpsn">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tglpsn" name="tanggalpesan"value="<?=$psn["tanggal_pesan"];?>">
                
            <div class="form-group">
                <label for="jml">jumlah Barang</label>
                <input type="text" class="form-control" id="jml" name="jumlahbarang"value="<?=$psn["jumlah_barang"];?>">
            </div>

            <button class="btn btn-primary mt-3" type="submit">Update</button>
            <button class="btn btn-danger  mt-3 ml-3" type="reset">Cancel</button>
        </form>
                     <?php endforeach;?>
    </div>
</div>
                    
