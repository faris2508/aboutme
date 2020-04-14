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
.button{
    font-size:25px;
    border-radius:10px; 
    width:100px;
    background-color:limegreen;
    color:white;
}


</style>

</head>
<body>
     
    <form action="simpan_barang.php" method="POST">
        <table align="center">
            <tr>
                <td colspan="3"><h1>Form Input barang</h1></td>
            </tr>
            <tr>
                <td>Kode Produk</td>
                <td>:</td>
                <td><input type="text" placeholder="Kode akan diisi otomatis" name="kode" style="width: 500px;font-size:30px" disabled></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama" style="width: 500px;font-size:30px"></td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td>:</td>
                <td><input type="number" name="harga" style="width: 500px;font-size:30px"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>:</td>
                <td>
                    <select name="satuan" id="" style="width: 500px;font-size:30px">
                        <option value="Game only">Game only</option>
                        <option value="Bundle with Dlc">Bundle with Dlc</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <select name="kategori" id="" style="width: 500px;font-size:30px">
                        <option value="Soft copy">Soft copy</option>
                        <option value="Hard copy">Hard copy</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Url Gambar</td>
                <td>:</td>
                <td><input type="url" name="url" style="width: 500px;font-size:30px"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="number" name="stok" style="width: 500px;font-size:30px"></td>
            </tr>
            <tr>
                <td colspan="3"> 
                    <input type="submit" name="btn" class="button" value="Tambah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>