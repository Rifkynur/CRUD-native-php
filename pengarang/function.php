<?php
$servername = "localhost";
$database = "penjualan";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

function add($add){
    global $conn;

    $id_pengarang = $add['id_pengarang'];
    $nama_pengarang = $add['nama_pengarang'];
    $email = $add['email'];
    $telp = $add['telp'];
    $alamat = $add['alamat'];

    $query = "INSERT INTO pengarang VALUES 
                ('$id_pengarang','$nama_pengarang','$email','$telp','$alamat')";
                
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function ubah($id){
    global $conn;

    $id_pengarang = $id['id_pengarang'];
    $nama_pengarang = $id['nama_pengarang'];
    $email = $id['email'];
    $telp = $id['telp'];
    $alamat = $id['alamat'];

    $query = "UPDATE pengarang SET 
                id_pengarang = '$id_pengarang',
                nama_pengarang = '$nama_pengarang',
                email = '$email',
                telp = '$telp',
                alamat = '$alamat'
                WHERE id_pengarang = '$id_pengarang'
                ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($pengarang){
    global $conn;

    mysqli_query($conn,"DELETE FROM pengarang WHERE id_pengarang = '$pengarang'");
    return mysqli_affected_rows($conn);
}
?>