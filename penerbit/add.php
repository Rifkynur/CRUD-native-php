<?php
require'function.php';
if (isset($_POST['submit'])){
    if(tambah($_POST) > 0){
        echo"
        <script> alert('anda berhasil memasukan data');
                document.location.href = 'penerbit.php';
        </script>";
    }else{
        echo"
        <script> alert('anda gagal memasukan data');
        document.location.href = 'penerbit.php';
        </script>";
    }

};

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
    <div class="form_add_penerbit text-white">
        <h1>Tambah Data Penerbit</h1>
        <form action="" method="post" class="form">
            <ul>
                <li><label for="id_penerbit" >id penerbit</label>
                    <input type="text" name="id_penerbit" id="id_penerbit" placeholder="masukan id penerbit">
                </li>
                <li><label for="nama_penerbit" >nama penerbit</label>
                    <input type="text" name="nama_penerbit" id="nama_penerbit" placeholder="masukan nama penerbit">
                </li>
                <li><label for="email" >email</label>
                    <input type="text" name="email" id="email" placeholder="masukan email">
                </li>
                <li><label for="telp" >Telephon</label>
                    <input type="text" name="telp" id="telp" placeholder="masukan no telp">
                </li>
                <li><label for="alamat" >Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="masukan alamat ">
                </li>
                <div class="button">
                    <a href="penerbit.php" class="btn btn-primary">kembali </a>
                    <button type="submit" name="submit" class="btn btn-success">kirim</button>
                </div>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>