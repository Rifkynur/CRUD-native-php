<?php
require'function.php';

$result = mysqli_query($conn,"SELECT * FROM katalog");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>

    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2 class="ms-3">Daftar Katalog</h2>
    <table class="table">
        <tr class="table-info">
            <th>Id katalog</th>
            <th>Nama katalog</th>
            <th>Aksi</th>
        </tr>
        <?php while($data_katalog = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo$data_katalog['id_katalog']?></td>
            <td><?php echo$data_katalog['nama']?></td>
            <td>
                <a href="edit.php?id_katalog=<?= $data_katalog['id_katalog'] ?>" class="btn btn-success">ubah</a>
                <a href="delete.php?id_katalog=<?= $data_katalog['id_katalog']?>" onclick="return confirm('apakah anda ingin menghapus data ini??')" class="btn btn-danger">hapus</a>    
            </td>
        </tr>
        <?php }?>
    </table>
    <div class="button ms-3">
        <a href="../index.php" class="btn btn-primary">kembali</a>
        <a href="add.php" class="btn btn-primary">tambah katalog baru</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>