 <!-- Begin Page Content -->
<div class="container-fluid mt-5">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Update Data Barang Gudang</h1>
         <div class="container-fluid">
             <?php foreach ($barang as $brg)?>
            <form action="<?=base_url('beranda_gudang/dataUpdate/').$brg["kode_barang"];?>" method="post">
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control" id="kode" name="kodebarang" value=<?= $brg["kode_barang"];?>>

            </div>
            <div class="form-group">
                <label for="namabrg">Nama Barang</label>
                <input type="text" class="form-control" id="namabrg" name="namabarang"value=<?= $brg["nama_barang"];?>>

            </div>
            <div class="form-group">
                     <label for="jenisbrg">Jenis Barang</label>
                    <select class="form-control" id="jenisbrg" name="jenisbarang"value=<?= $brg["jenis_barang"];?>>
                        <option>Mentah</option>
                        <option>Matang</option>
                        <option>Isi sendiri</option>
                     </select>
            </div>
            <div class="form-group">
                <label for="stockbrg">Stock Barang</label>
                <input type="text" class="form-control" id="stockbrg" name="stockbarang"value=<?= $brg["stock_barang"];?> >

            </div>
            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="text" class="form-control" id="harga" name="hargabarang"value=<?= $brg["harga_barang"];?> >
            </div>

            <button class="btn btn-primary mt-3" type="submit">Update</button>
             <button class="btn btn-danger  mt-3 ml-3" type="reset">Cancel</button>
        </form>
    </div>
</div>
                    
