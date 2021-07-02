<?php 
//XAMPP
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $container = [];
    while( $baris = mysqli_fetch_assoc($result) ){
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
    $foto = upload();
    if(!$foto) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO penduduk VALUES
    ('', '$fname', '$lname', '$nik', '$kelas', '$email', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $nameFile = $_FILES['foto']['name'];
    $sizeFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if( $error === 4 ) {
        echo "<script>
        alert('Silahkan masukkan foto!');
        </script>";
        return false;
    }

    $extImageValid = ['jpg', 'jpeg', 'png'];
    $extImage = explode('.', $nameFile);
    $extImage = strtolower(end($extImage));
    if( !in_array($extImage, $extImageValid) ){
            echo "<script>
                alert('yang anda upload bukan gambar')
                 </script>" ;
    return false;
    }

    if($sizeFile > 10000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar')
             </script>" ;
    return false;
    }

    $nameFileNew = uniqid();
    $nameFileNew .= '.';
    $nameFileNew .= $extImage;

    move_uploaded_file($tmpName, 'img/' . $nameFileNew);
    return $nameFileNew;
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM penduduk WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function modify($data) {
    global $conn;
    //membuat container array
    $id = ($data["id"]);
    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data["lname"]);
    $nik = htmlspecialchars($data["nik"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);
    $fotoOld = htmlspecialchars($data["fotoOld"]);

    if($_FILES['foto']['error'] === 4 ){
        $foto = $fotoOld;   
        } else {
            $foto = upload();
        }

    //query update data
    $query = "UPDATE penduduk SET
        fname = '$fname',
        lname = '$lname',
        nik = '$nik',
        kelas = '$kelas',
        email = '$email',
        foto = '$foto'
        WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($keyword) {
    $query = "SELECT * FROM penduduk
    WHERE
    fname LIKE '%$keyword%' OR
    lname LIKE '%$keyword%' OR
    nik LIKE '%$keyword%' OR
    kelas LIKE '%$keyword%'
    ";
    return query($query);
}

function regist($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //check used username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah dipakai!');
        </script>";
        return false;
    }

    //check matching confrimation password
    if($password !== $password2) {
        echo "<script>alert('Pastikan confirm password yang anda masukkan sama!');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}


?>