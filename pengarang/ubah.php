<?php
require'function.php';


$id = $_GET["id_pengarang"];
$result = mysqli_query($conn,"SELECT * FROM pengarang WHERE id_pengarang = '$id'");
while($pengarang = mysqli_fetch_assoc($result)){
    $id_pengarang = $pengarang['id_pengarang'];
    $nama_pengarang = $pengarang['nama_pengarang'];
    $email = $pengarang['email'];
    $telp = $pengarang['telp'];
    $alamat = $pengarang['alamat'];
}

if(isset ($_POST['submit'])){
    if(ubah($_POST) > 0 ){
        echo"
        <script>alert('anda berhasil mengubah data');
                document.location.href = 'pengarang.php';
        </script>";
    }else{
        echo"
        <script>alert('anda gagal mengubah data');
                document.location.href = 'pengarang.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        ul li{
            list-style-type: none;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="form_ubah_pengarang text-white">
        <form action="" method="post" class="form">
            <h1>Ubah data pengarang</h1>
            <ul>
                <li><label for="id_pengarang" >id pengarang</label>
                    <input type="text" name="id_pengarang" id="id_pengarang" value=<?= $id_pengarang?>>
                </li>
                <li><label for="nama_pengarang" >nama pengarang</label>
                    <input type="text" name="nama_pengarang" id="nama_pengarang" value=<?= $nama_pengarang?>>
                </li>
                <li><label for="email" >email</label>
                    <input type="text" name="email" id="email" value=<?= $email?>>
                </li>
                <li><label for="telp" >Telephon</label>
                    <input type="text" name="telp" id="telp" value=<?= $telp?>>
                </li>
                <li><label for="alamat" >Alamat</label>
                    <input type="text" name="alamat" id="alamat" value=<?= $alamat?>>
                </li>
                <div class="button text-center mt-3">
                    <button type="submit" name="submit" class="btn btn-success">kirim</button>
                    <a href="pengarang.php" class="btn btn-primary">kembali </a>
                </div>
            </ul>
        </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>