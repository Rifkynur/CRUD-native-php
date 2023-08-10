<?php
require'function.php';

$id = $_GET['id_katalog'];

$result = mysqli_query($conn,"SELECT * FROM katalog WHERE id_katalog = '$id'");

while($katalog = mysqli_fetch_assoc($result)){
    $id_katalog = $katalog['id_katalog'];
    $nama = $katalog['nama'];
}

if(isset($_POST['submit'])){
    if(edit($_POST) > 0){
        echo"
        <script> alert('anda berhasil mengubah data');
                 document.location.href = 'katalog.php';
        </script>
        ";
    }else{
        echo"
        <script> alert('anda gagal mengubah data');
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
        .form_edit_katalog {
            margin-top: 50px;
            text-align: left;
            box-sizing: border-box;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 10px black;
        }
        .form_edit_katalog h1 {
            border-bottom: 3px solid aliceblue;
            text-transform: capitalize;
            font-weight: bolder;
        }
        .form ul li label {
            display: block;
            font-size: 20px;
            font-weight: bolder;
            text-transform: capitalize;
        }
        .form ul li input {
            width: 90%;
            margin-top: 5px;
            padding: 3px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="form_edit_katalog text-white">
        <h1>Edit Data Katalog</h1>
        <form action="" method="post" class="form mt-3">
            <ul>
                <li><label for="id_katalog" >id katalog</label>
                    <input type="text" name="id_katalog" id="id_katalog" value=<?php echo$id_katalog?>>
                </li>
                <li><label for="nama" >nama katalog</label>
                    <input type="text" name="nama" id="nama" value=<?php echo$nama?>>
                </li>
                <div class="button text-center mt-3">
                    <a href="katalog.php" class="btn btn-primary">kembali </a>
                    <button type="submit" name="submit" class="btn btn-success">kirim</button>
                </div>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>