<?php

    include('connection.php');
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi']; 

        $query_edit = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id = '$id' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            $_SESSION['message'] = '<div class= "alert alert-success" role="alert">Berhasil Update Data</div>';
            header("location:index.php");
        }else{
            $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Update Data </div>';
            header("location:index.php?id=$id");
        }
?>