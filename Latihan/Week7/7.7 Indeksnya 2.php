<?php
//koneksikan ke database
$conn = mysqli_connect("localhost", "root", "", "tugas3wad");
//ambil tabel

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [] ;

    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $kodebarang = $data["kodebarang"];
    $namabarang = $data["namabarang"];
    $gambar = $data["Gambar"];
    $hargajual = $data["hargajual"];
    $stokbarang = $data["stokbarang"];

    $query = "INSERT INTO onlineshopalfi
    VALUES
    ('', '$kodebarang','$namabarang','$gambar','$hargajual','$stokbarang')
    ";
}

function hapus($no){
    global $conn;
    mysqli_affected_rows($conn);
    return mysqli_affected_rows($conn);  
}

function ubah($data){
    global $conn;
    $no = $data["no"];
    $kodebarang =   $data["kodebarang"];
    $namabarang = $data["namabarang"];
    $gambar = $data["Gambar"];
    $hargajual = $data["hargajual"];
    $stokbarang = $data["stokbarang"];

    $query = "UPDATE onlineshopalfi SET
    kodebarang = '$kodebarang',
    namabarang = '$namabarang',
    Gambar = '$gambar',
    hargajual = '$hargajual',
    stokbarang = '$stokbarang',
    WHERE no = $no
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>