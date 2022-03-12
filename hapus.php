<?php
include 'connection.php';

    $query_hapus = "DELETE FROM mahasiswa WHERE id = '$_GET[id]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        $_SESSION['message']='<div class="alert alert-success" role="alert">Berhasil Hapus Data</div>';
        header("location:index.php");
    }else{
        $_SESSION['message']='<div class="alert alert-danger" role="alert">Gagal Hapus Data</div>';
        header("location:index.php");
    }
?>