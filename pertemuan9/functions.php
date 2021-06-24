<?php 
//XAMPP
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $container = [];
    while( $baris = mysqli_fetch_assoc($result)){
    $container[] = $baris;
    }
    return $container;
}
?>