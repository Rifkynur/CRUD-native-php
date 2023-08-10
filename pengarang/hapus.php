<?php
require'function.php';

$id = $_GET['id_pengarang'];

if(hapus($id) > 0){
    echo"
    <script> alert('berhasil menghapus data');
            document.location.href = 'pengarang.php';
    </script>";
}else{
    echo"
    <script> alert('gagal menghapus data');
            document.location.href = 'pengarang.php';
    </script>";

}



?>