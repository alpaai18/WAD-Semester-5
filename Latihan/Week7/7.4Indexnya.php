<?php
//koneksikan ke database
$conn = mysqli_connect("localhost:3306", "root", "", "tugas3wad");
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
?>