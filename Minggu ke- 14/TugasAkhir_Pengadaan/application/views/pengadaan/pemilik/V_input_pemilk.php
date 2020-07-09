 <!-- Begin Page Content -->
<div class="container-fluid mt-5">

                <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Input Data Suplier</h1>
         <div class="container-fluid">
            <form action="<?=base_url();?>beranda_pemilik/inputDataSuplier" method="post">
            <div class="form-group">
                <label for="kode">Kode Suplier</label>
                <input type="text" class="form-control" id="kode" name="kodesuplier" required>

            </div>
            <div class="form-group">
                <label for="namasup">Nama Suplier</label>
                <input type="text" class="form-control" id="namasup" name="namasuplier"required>

            </div>
            <div class="form-group">
                    <label for="jenissup">Jenis Suplier</label>
                    <select class="form-control" id="jenissup" name="jenissuplier"required>
                        <option>Mentah</option>
                        <option>Matang</option>
                        <option>Isi sendiri</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Suplier</label>
                <input type="text" class="form-control" id="alamat" name="alamatsuplier"required>

            </div>
            <div class="form-group">
                <label for="telp">Telpon Suplier</label>
                <input type="text" class="form-control" id="telp" name="telponsuplier"required>
            </div>

            <button class="btn btn-primary mt-3" type="submit">Tambah</button>
            <button class="btn btn-danger  mt-3 ml-3" type="reset">Cancel</button>
        </form>
    </div>
</div>
                    
