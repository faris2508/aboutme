<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form inventory</title>

<style>
table{
    font-size:30px;
}
td input[type = "text"],td input[type = "number"]{
    width:500px;
    font-size:30px;
}
.kat{
    width:500px;
    font-size:30px;
}
.satuan{
    width:500px;
    font-size:30px;
}
.tombol{
    font-size:25px;
    border-radius:10px; 
    width:100px;
    background-color:limegreen;
}
</style>
<?php

include('lib/koneksi.php');
$pk = $_GET['key'];
$hasil = $con->query("SELECT * FROM `barang` WHERE `kd_produk` =$pk");

foreach ($hasil as $data){

?>

</head>
<body>
    <form action="proses_edit.php" method="POST">
        <table align="center">
            <tr>
                <td colspan="3"><h1>Form Edit barang</h1></td>
            </tr>
            <!-- <tr>
                <td>Kode Produk
                <input type="hidden" name="kd_produk"value="<?php echo $data['kd_produk'] ?>">
                </td>
                <td>:</td>
                <td><input type="text" name="kode"value="<?php echo $data['kd_produk'] ?>"></td>
            </tr> -->
            <tr>
                <td>Nama Produk
                <input type="hidden" name="kd_produk"  value="<?php echo $data['kd_produk'] ?>">
                </td>
                <td>:</td>
                <td><input type="text" name="nama"  value="<?php echo $data['nama_produk'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td>:</td>
                <td><input type="number" name="harga"  value="<?php echo $data['harga_produk'] ?>"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>:</td>
                <td>
                    <select name="satuan" id="" class="satuan">
                        <option <?php if($data['satuan']=="Game Only"){echo "selected=selected";}?> value="Game only">Game only</option>
                        <option <?php if($data['satuan']=="Bundle with Dlc"){echo "selected=selected";}?> value="Bundle with Dlc">Bundle with Dlc</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <select name="kategori" id="" class="kat">
                        <option <?php if($data['kategori']=="Soft copy"){echo "selected=selected";}?> value="Soft copy">Soft copy</option>
                        <option <?php if($data['kategori']=="Hard copy"){echo "selected=selected";}?> value="Hard copy">Hard copy</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Url Gambar</td>
                <td>:</td>
                <td><input type="text" name="url" value="<?php echo $data['url'] ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="number" name="stok" value="<?php echo $data['stok'] ?>"></td>
            </tr>
            <tr>
                <td colspan="3"> 
                    <input type="submit" name="btn" value="Edit" class="tombol">
                </td>
            </tr>
        </table>
    </form>
<?php  }  ?>
</body>
</html>