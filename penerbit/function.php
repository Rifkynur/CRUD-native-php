<?php
$conn = mysqli_connect("localhost","root","","penjualan");

function tambah($add){
    global $conn;

    $id_penerbit = $add['id_penerbit'];
    $nama_penerbit = $add['nama_penerbit'];
    $email = $add['email'];
    $telp = $add['telp'];
    $alamat = $add['alamat'];
    
    $query = "INSERT INTO penerbit VALUES
            ('$id_penerbit','$nama_penerbit','$email','$telp','$alamat')";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}


function edit($data){
    global $conn;

    $id_penerbit = $data["id_penerbit"];
    $nama_penerbit = $data["nama_penerbit"];
    $email = $data["email"];
    $telp = $data["telp"];
    $alamat = $data["alamat"];

    $query = "UPDATE penerbit set
                id_penerbit = '$id_penerbit',
                nama_penerbit = '$nama_penerbit',
                email = '$email',
                telp = '$telp',
                alamat = '$alamat' 
                where id_penerbit = '$id_penerbit'
                ";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;

    mysqli_query($conn,"DELETE FROM penerbit WHERE id_penerbit = '$id'");
    return mysqli_affected_rows($conn);
}
?>