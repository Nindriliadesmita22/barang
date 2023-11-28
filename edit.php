<?php
include 'koneksi.php';
$db = new database();
// $data_user = $db->tampil_data();
?>
<h3>edit data </h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $dat){
?>
    <table>
        <tr>
            <td>id</td>
            <td>:</td>
            <td><input type="hidden" name="id" value="<?php echo $dat['id'] ?>"/></td>
        </tr>

        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama_barang" value="<?php echo $dat['nama_barang'] ?>"/></td>
        </tr>

        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok" value="<?php echo $dat['stok'] ?>"/></td>
        </tr>

        <tr>
            <td>Harga Beli</td>
            <td>:</td>
            <td><input type="text" name="harga_beli" value="<?php echo $dat['harga_beli'] ?>"/></td>
        </tr>

        <tr>
            <td>Harga jual </td>
            <td>:</td>
            <td><input type="text" name="harga_jual" value="<?php echo $dat['harga_jual'] ?>"/></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="tombol" value="Simpan"/></td>
            <td></td>
            <td><button><a href="tampil.php">Batal</a></button></td>
        </tr>
    </table>

    <?php
}
?>
</form>