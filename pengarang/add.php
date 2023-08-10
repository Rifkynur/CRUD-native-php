<?php
require'function.php';

if(isset($_POST['submit'])){
    if(add($_POST) > 0){
        echo"<script> alert('data berhasil ditambahkan');
                        document.location.href = 'pengarang.php';
               </script>";
            }else{ echo"<script> alert('data gagal ditambahkan');
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
    <div class="form_add_pengarang text-white" >
        <h1>Tambah data pengarang</h1>
        
        <form action="" method="post" class="form mt-3">
            <ul>
                <li>
                    <label for="id_pengarang" >id pengarang</label>
                    <input type="text" name="id_pengarang" id="id_pengarang" placeholder="masukan id pengarang">
                </li>
                <li>
                    <label for="nama_pengarang" >nama pengarang</label>
                    <input type="text" name="nama_pengarang" id="nama_pengarang" placeholder="masukan nama pengarang">
                </li>
                <li>
                    <label for="email" >email</label>
                    <input type="text" name="email" id="email" placeholder="masukan email">
                </li>
                <li>
                    <label for="telp" >Telephon</label>
                    <input type="text" name="telp" id="telp" placeholder="masukan nomor telp">
                </li>
                <li>
                    <label for="alamat" >Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="masukan alamat pengarang">
                </li>
                <div class="button text-center mt-3">
                    <button type="submit" name="submit" class="btn btn-success">kirim</button>
                    <a href="pengarang.php" class="btn btn-primary" >kembali </a>
                </div>
            </ul>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>