<?php
    include 'connection.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query_tambah = "INSERT INTO mahasiswa (nim,nama,prodi) VALUES ('$nim','$nama','$prodi')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil menambahkan Data</div>' ;
        header("location: index.php");
    }else{
        $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal menambahkan Data</div>' ;
        header("location: tambah.php");
    }

?>