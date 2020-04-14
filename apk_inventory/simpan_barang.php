<?php
include('lib/koneksi.php');
$nama_produk=$_POST['nama'];
$harga_produk=$_POST['harga'];
$satuan=$_POST['satuan'];
$kategori=$_POST['kategori'];
$url=$_POST['url'];
$stok=$_POST['stok'];
// print_r($_POST);
$result = $con->exec("INSERT INTO `barang` (`kd_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`,`url`,`stok`) VALUES (NULL, '$nama_produk', '$harga_produk', '$satuan', '$kategori','$url','$stok');");
echo $result;

if($result==TRUE){
    // echo"data tersimpan ke database";
    header("location:databarang.php");
}else{
    echo"data gagal simpan";
}

?>