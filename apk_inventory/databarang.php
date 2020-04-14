<?php
include('lib/koneksi.php');
$hasil = $con->query("SELECT * FROM `barang`");

?>
<style>
th,td{
    font-size:20px;
    padding:15px;
}
button{
    font-size:25px;
    border-radius:5px; 
    width:150px;
    height:50px;
    background-color:darkcyan;
}
</style>
<div align="center">
    <table border="1" style="text-align:center">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Satuan</th>
            <th>Kategori</th>
            <th>URL Gambar</th>
            <th>Stok</th>
            <th>Modify</th>
        </tr>

        <?php foreach ($hasil as $data){
            # code...
        
        ?>
        <tr>
            <td><?php echo $data['kd_produk'] ?></td>
            <td><?php echo $data['nama_produk'] ?></td>
            <td><?php echo $data['harga_produk'] ?></td>
            <td><?php echo $data['satuan'] ?></td>
            <td><?php echo $data['kategori'] ?></td>
            <td><img src="<?= $data['url']?>" alt="foto" width="100px"></td>
            <td <?php if ($data['stok']<=5) : ?> style ="background-color:red; color:white" <?php endif; ?>><?=$data['stok'] ?></td>
            <td>
                <a href="form_edit_barang.php?key=<?php echo $data['kd_produk']; ?>">Edit</a> |   
                <a href="delete_barang.php?key=<?php echo $data['kd_produk']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
        <button>
            <a href="form_barang.php">Kembali</a>
        </button>
</div>
