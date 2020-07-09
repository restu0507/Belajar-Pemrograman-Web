
 <!-- Begin Page Content -->
<div class="container-fluid mt-5">

                <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Input Data Barang Masuk</h1>
         <div class="container-fluid">
            <form action="<?=base_url();?>beranda_gudang/inputDataMasuk" method="post">
            <div class="form-group">
                <label for="kode">Kode Nota</label>
                <input type="text" class="form-control" id="kode" name="kodenota" required>

            </div>
            <div class="form-group">
                <label for="kodepsn">Kode Pesan</label>
                <select class="form-control" id="kodepsn" name="kodepesan">
                    <?php foreach ($pesan as $psn) : ?> 

                        <option><?=$psn["kode_pesan"];?></option>

                    <?php endforeach;?>
                        
                </select>


            </div>
            <div class="form-group">
                <label for="tglmsk">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tglmsk" name="tanggalmsk"required>

            </div>
            <div class="form-group">
                <label for="kodesp">Kode Suplier</label>
                <select class="form-control" id="kodebrg" name="kodesuplier" required> 
                     <?php foreach ($pemilik as $pml) : ?> 

                        <option><?=$pml["kode_suplier"];?></option>

                    <?php endforeach;?>
                        
                </select>

            </div>
             <div class="form-group">
                <label for="kodebrg">Kode Barang</label>
                <select class="form-control" id="kodebrg" name="kodebarang">
                    <?php foreach ($barang as $brg) : ?> 

                        <option><?=$brg["kode_barang"];?></option>

                    <?php endforeach;?>
                        
                </select>

            <div class="form-group">
                <label for="jml">jumlah Barang</label>
                <input type="text" class="form-control" id="jml" name="jumlahbarang"required>
            </div>

            <button class="btn btn-primary mt-3" type="submit">Tambah</button>
            <button class="btn btn-danger  mt-3 ml-3" type="reset">Cancel</button>
                    
        </form>
    </div>
</div>
                    
