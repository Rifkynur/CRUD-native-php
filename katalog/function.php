<?php
$servername = "localhost";
$database = "penjualan";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

function delete($id){
    global $conn;

    mysqli_query($conn,"DELETE FROM katalog WHERE id_katalog = '$id'");
    return mysqli_affected_rows($conn);
}


function add($data){
    global $conn;

    $id_katalog = $data['id_katalog'];
    $nama = $data['nama'];

    $query = "INSERT INTO katalog VALUES 
            ('$id_katalog','$nama')" ;

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}


function edit($data){
    global $conn;

    $id_katalog = $data['id_katalog'];
    $nama = $data['nama'];

    $query = "UPDATE katalog SET 
                id_katalog = '$id_katalog', nama = '$nama'
                where id_katalog = '$id_katalog'
            ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

?>

