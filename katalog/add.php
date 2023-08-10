<?php
require'function.php';

if (isset($_POST['submit'])){
    if(add($_POST) > 0){
        echo"
        <script> alert('anda berhasil menambah data');
                document.location.href = 'katalog.php';
        </script>
        ";
    }else{
        echo"
        <script> alert('anda gagal menambah data');
                document.location.href = 'katalog.php';
        </script>
        ";
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
    <div class="form_add_katalog text-white">
        <h1>Tambah data katalog</h1>
        <form action="" method="post" class="form mt-3">
            <ul>
                <li><label for="id_katalog" >id katalog</label>
                    <input type="text" name="id_katalog" id="id_katalog" placeholder="masukan id katalog">
                </li>
                <li><label for="nama" >nama katalog</label>
                    <input type="text" name="nama" id="nama" placeholder="masukan nama katalog">
                </li>
                <div class="button text-center mt-3">
                    <button type="submit" name="submit" class="btn btn-success">kirim</button>
                    <a href="katalog.php" class="btn btn-primary">kembali </a>
                </div>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>