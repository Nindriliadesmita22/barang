<?php 
include 'koneksi.php';
$db = new database();
 

$aksi = $_GET['aksi'];
if($aksi == "tambah")
{
	$db->input($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
	header('location:tampil.php');
}
// $aksi = $_GET["aksi"];
// if($aksi == $_GET["tambah"]){
//     $db->input($_POST["nama_barang"],$_POST["stok"],$_POST["harga_beli"],$_POST["harga_jual"]);
//     header("location:tampil.php");
// }
elseif($aksi == "hapus"){ 	
    $db->hapus($_GET['id']);
   header("location:tampil.php");
}elseif($aksi == "update"){
    $db->update($_POST['id'], $_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("location:tampil.php");
}
?>