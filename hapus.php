<?php
include "function.php";

$id = $_GET['id'];

if (hapus($id)) 
{
    echo
    "<script>
            alert('Berhasil menghapus data :');
            document.location.href = 'homeAdmin.php';
        </script>";
}else {
    echo
        "<script>
            alert('Gagal menghapus data :');
            document.location.href = 'homeAdmin.php';
        </script>";
    die;
}
