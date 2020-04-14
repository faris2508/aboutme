<?php
include('lib/koneksi.php');
$pk = $_POST['kd_produk'];
$nama_produk=$_POST['nama'];
$harga_produk=$_POST['harga'];
$satuan=$_POST['satuan'];
$kategori=$_POST['kategori'];
$url=$_POST['url'];
$stok=$_POST['stok'];
$hasil = $con->query("UPDATE `barang` SET `nama_produk` = '$nama_produk', `harga_produk` = '$harga_produk', `satuan` = '$satuan', `kategori` = '$kategori', `url` = '$url', `stok` = '$stok' WHERE `kd_produk` = '$pk' ");

if($hasil==TRUE){
    // echo"data berhasil diedit";
    header("location:databarang.php?info=edit");
}else{
    echo"data gagal diedit";
}

?>