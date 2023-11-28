<?php
include "koneksi.php";
$db=new database();
$tampildata=$db->tampil_data();

?>
<html>
    <head>
        <title>CRUD PBO</title>
    </head>
    <body>
        <h3>HASIL CRUD PBO</h3>
        <a href="tambah_data.php">Tambah Data</a>
        <table border = "1">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
           foreach ($tampildata as $dat){

            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $dat['nama_barang']; ?></td>
                <td><?php echo $dat['stok']; ?></td>
                <td><?php echo $dat['harga_beli']; ?></td>
                <td><?php echo $dat['harga_jual'];  ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $dat['id']; ?>&aksi=edit">Ubah</a> 
                | 
                    <a href="proses.php?id=<?php echo $dat['id']; ?>&aksi=hapus">Hapus</a>
                </td>
            </tr>
            <?php
           }
           ?>
        </table>
    </body>
</html>
