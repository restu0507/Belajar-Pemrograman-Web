<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Laporan Data Barang</title>
</head>
<body>
   <h1 style="text-align: center">Laporan Data Pemesanan Barang</h1>
  

   <table>
                <tr>
                    <th>No</th>
                    <th>Kode Pesan</th>
                    <th>Tangal Pesan</th>
                    <th>Kode Suplier</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Barang</th>
                </tr>
                    <?php $i=1;?>
                    <?php foreach( $pesan as $psn) :  ?>
                <tr>    
                        <td><?= $i++;?></td>   
                        <td><?= $psn['kode_pesan']; ?></td>
                        <td><?= $psn['tanggal_pesan']; ?></td>
                        <td><?= $psn['kode_suplier']; ?></td>
                        <td><?= $psn['kode_barang']; ?></td>     
                        <td><?= $psn['jumlah_barang']; ?></td> 
                        
                   </tr>
                <?php endforeach;?>
            </table>
</body>
</html>