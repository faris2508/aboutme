<?php
include('lib/koneksi.php');
$key=$_GET['key'];
$hasil = $con->query("DELETE FROM `barang` WHERE `kd_produk`= $key");

if($hasil==TRUE){
    // echo"data berhasil dihapus";
    header("location:databarang.php?info=hapus");
}else{
    echo"data gagal dihapus";
}
?>