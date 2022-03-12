<?php
    include 'connection.php';
    $tampil = pg_query("SELECT * FROM mahasiswa");
    $jumlah = pg_num_rows($tampil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body style="background-color:rgb(220,222,224);">
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
            <a href="tambah.php" class="btn btn-primary text-center" style="background-color:rgb(32, 38, 50);">Tambah Data</a>
            </div>
            <div class="card-body shadow" style="margin-auto;">
            <div class="">
            <?php
            if(!empty($_SESSION['message'])){
                echo $_SESSION['message'];
                $_SESSION['message']=null;
            }
            ?> 
        </div>
              
                <h3 class="text-center"><b>Daftar Data</b></h3>
                <table class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                            <td><b>No</b></td>
                            <td><b>NIM</b></td>
                            <td><b>Nama</b></td>
                            <td><b>Prodi</b></td>
                            <td><b>Aksi</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nim'];?></td>
                            <td><?= $data['nama'];?></td>
                            <td><?= $data['prodi'];?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data')">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                      
                    </tbody>
                </table>
                <b>INFORMASI</b>
                <p>Jumlah Data Sekarang  = <?php echo $jumlah; ?></p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>