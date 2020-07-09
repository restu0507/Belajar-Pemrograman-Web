<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Laporan Data Barang</title>
</head>
<body>
   <h1 style="text-align: center">Laporan Data Barang Masuk</h1>
  

   <table class="">
                <tr>
                    <th>No</th>
                    <th>Kode Nota</th>
                    <th>Kode Pesan</th>
                    <th>Tanggal Masuk</th>
                    <th>Kode Suplier</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Barang</th>
                </tr>
                    <?php $i=1;?>
                    <?php foreach( $masuk as $msk) :  ?>
                <tr>    
                        <td><?= $i++;?></td>   
                        <td><?= $msk['kode_nota']; ?></td>
                        <td><?= $msk['kode_pesan']; ?></td>
                        <td><?= $msk['tanggal_masuk']; ?></td>
                        <td><?= $msk['kode_suplier']; ?></td>
                        <td><?= $msk['kode_barang']; ?></td> 
                        <td><?= $msk['jumlah_barang']; ?></td> 
                        
                   </tr>
                <?php endforeach;?>
            </table>
</body>
</html>