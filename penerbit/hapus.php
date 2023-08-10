<?php
require'function.php';
$hapus = $_GET['id_penerbit'];


if(hapus($hapus) > 0){
    echo"
    <script> alert('anda berhasil menghapus data');
            document.location.href = 'penerbit.php';
    </script>";
}else{
    echo"
    <script> alert('anda gagal menghapus data');
            document.location.href = 'penerbit.php';
    </script>";
}
?>