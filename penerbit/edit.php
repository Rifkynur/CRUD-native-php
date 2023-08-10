<?php
require'function.php';
if (isset($_POST['submit'])){
    if(edit($_POST) > 0){
        echo"
        <script> alert('anda berhasil mengubah data');
                document.location.href = 'penerbit.php';
        </script>";
    }else{
        echo"
        <script> alert('anda gagal mengubah data');
        document.location.href = 'penerbit.php';
        </script>";
    }

};

$id = $_GET['id_penerbit'];

$result = mysqli_query($conn,"SELECT * FROM penerbit WHERE id_penerbit = '$id'");
while($edit = mysqli_fetch_assoc($result)){
    $id_penerbit = $edit["id_penerbit"];
    $nama_penerbit = $edit["nama_penerbit"];
    $email = $edit["email"];
    $telp = $edit["telp"];
    $alamat = $edit["alamat"];
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
    <div class="form_edit_penerbit text-white">
        <form action="" method="post" class="form">
            <h1>Edit data penerbit</h1>
            <ul>
                <li><label for="id_penerbit" >id penerbit</label>
                    <input type="text" name="id_penerbit" id="id_penerbit" value=<?php echo$id_penerbit?>>
                </li>
                <li><label for="nama_penerbit" >nama penerbit</label>
                    <input type="text" name="nama_penerbit" id="nama_penerbit" value=<?php echo$nama_penerbit?>>
                </li>
                <li><label for="email" >email</label>
                    <input type="text" name="email" id="email" value=<?php echo$email?>>
                </li>
                <li><label for="telp" >Telephon</label>
                    <input type="text" name="telp" id="telp" value=<?php echo$telp?>>
                </li>
                <li><label for="alamat" >Alamat</label>
                    <input type="text" name="alamat" id="alamat" value=<?php echo$alamat?>>
                </li>
                <div class="button text-center">
                    <a href="penerbit.php" class="btn btn-primary">kembali </a>
                    <button type="submit" name="submit" class="btn btn-success">kirim</button>
                </div>
            </ul>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>