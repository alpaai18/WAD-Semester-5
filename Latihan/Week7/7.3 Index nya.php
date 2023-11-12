<?php
//koneksikan ke database
require '7.2Indexnya.php';
//ambil tabel
$barangnya = query("SELECT * FROM onlineshopalfi");
?>

<!DOCTYPE html>
<html lang="en">
    <head><title>Toko Alfi</title></head>
    <body>
        <h1>Etalase Produk</h1>

        <a href = "7.3Tambah.php"> Tambah Barang Jualan di Etalase</a>
        <br><br>
        
        <table border="1" cellpadding ="10" cellspacing ="0">
            <tr>
                <th>No. </th>
                <th>Kode Barang</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
                <th>AKSI</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($barangnya as $barang) ; ?>
            <tr>
                <td>1</td>
                <td>B01</td>
                <td><img src = "Laptop Gaming.jfif" alt = ""></td>
                <td>Laptop Gaming</td>
                <td>17500000</td>
                <td>100</td>
                <td>
                    <a href="">UPDATE</a>
                    <a href="">DELETE</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>B02</td>
                <td><img src = "Tas Laptop.jfif" alt = ""></td>
                <td>Tas Laptop</td>
                <td>325000</td>
                <td>100</td>
                <td>
                    <a href="">UPDATE</a>
                    <a href="">DELETE</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>B03</td>
                <td><img src = "Mouse Gaming.jfif" alt = ""></td>
                <td>Mouse Gaming</td>
                <td>650000</td>
                <td>100</td>
                <td>
                    <a href="">UPDATE</a>
                    <a href="">DELETE</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>B04</td>
                <td><img src = "Keyboard Mechanical.jfif" alt = ""></td>
                <td>Keyboard Mechanical</td>
                <td>350000</td>
                <td>100</td>
                <td>
                    <a href="">UPDATE</a>
                    <a href="">DELETE</a>
                </td>
            </tr>
    </body>
</html>
