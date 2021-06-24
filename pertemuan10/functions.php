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


function input($data) {
    global $conn;
    //membuat container array
    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data["lname"]);
    $nik = htmlspecialchars($data["nik"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);
    $foto = htmlspecialchars($data["foto"]);

    //query insert data
    $query = "INSERT INTO penduduk VALUES
    ('', '$fname', '$lname', '$nik', '$kelas', '$email', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM penduduk WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>