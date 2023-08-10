<?php
require'function.php';
$id = $_GET['id_katalog'];

if(delete($id) > 0){
    echo" 
    <script> alert('berhasil menghapus data');
            document.location.href = 'katalog.php';
    </script>
    ";
}else{
    echo" 
    <script> alert('gagal menghapus data');
            document.location.href = 'katalog.php';
    </script>
    ";
}


?>