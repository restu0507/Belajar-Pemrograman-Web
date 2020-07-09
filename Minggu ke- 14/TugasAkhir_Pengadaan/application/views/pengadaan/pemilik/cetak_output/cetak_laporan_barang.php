<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Laporan Data Barang</title>
</head>
<body>
   <h1 style="text-align: center">Laporan Data Barang</h1>
  

   <table class="">
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>jenis Barang</th>
                    <th>Stock Barang</th>
                    <th>Harga Barang</th>
                </tr>
                    <?php $i=1;?>
                    <?php foreach( $barang as $brg) :  ?>
                <tr>    
                        <td><?= $i++;?></td>   
                        <td><?= $brg['kode_barang']; ?></td>
                        <td><?= $brg['nama_barang']; ?></td>
                        <td><?= $brg['jenis_barang']; ?></td>
                        <td><?= $brg['stock_barang']; ?></td>
                        <td><?= $brg['harga_barang']; ?></td> 
                        
                   </tr>
                <?php endforeach;?>
            </table>
</body>
</html>