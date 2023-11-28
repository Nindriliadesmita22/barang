<?php
class database{
var $host ="localhost";
var $user ="root";
var $pass ="";
var $db ="db_pbo";

function __construct(){
    $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
    }
function tampil_data(){
    $data=mysqli_query($this->koneksi,"SELECT * FROM tb_barang");
    while($dat=mysqli_fetch_array($data)){
        $hasil[]=$dat;
    }
    return $hasil;
}
// Clas proses data
function input($nama_barang,$stok,$harga_beli,$harga_jual){
    mysqli_query($this->koneksi,"insert into tb_barang values (' ','$nama_barang','$stok','$harga_beli','$harga_jual')");
}
// edit data 
function edit($id){
    $data = mysqli_query($this->koneksi,"SELECT * FROM tb_barang where id='$id'");
    while($dat = mysqli_fetch_array($data)){
        $hasil[] = $dat;
    }
    return $hasil;

    // update data
}function update($id, $nama_barang, $stok, $harga_beli, $harga_jual){
    mysqli_query($this->koneksi, "UPDATE tb_barang set nama_barang='$nama_barang', stok='$stok', harga_beli='$harga_beli, harga_jual='$harga_jual' where id='$id'");
}
// proses hapus data 
function hapus($id){
    mysqli_query($this->koneksi,"delete from tb_barang where id='$id'");
}
}
?>