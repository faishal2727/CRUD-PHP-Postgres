<?php
    include 'connection.php';
    $query = "SELECT * FROM mahasiswa WHERE id = '$_GET[id]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $id = $data['id'];
        $nim = $data['nim'];
        $nama = $data['nama'];
        $prodi = $data['prodi'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body style="background-color:rgb(220,222,224)">
    <?php include 'nav.php'; ?>
        <div class="container">
            <div class="card shadow mt-3" >
                <form method="post" action="edit_proses.php" >
                    <div class="card-body" style="margin: auto;">
                        <h3 class="text-center"><b>Edit Data</b></h3>
                    <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id ="id" name ="id" readonly value ="<?php echo $id; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="mt-2mb-2" for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $nim;?>"  required>
                    </div>
                    <div class="form-group">
                        <label class="mt-5-mb-5" for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="masukan nama"value ="<?php echo $nama; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                            <select class="form-control" name="prodi" id="prodi">
                                <option value="<?php echo $prodi; ?>"><?php echo $prodi; ?></option>
                                <option value="TI">TI</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Elektro">Elektro</option>
                                <option value="Komputer">Komputer</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
                        <input  type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" style="background-color:rgb(32, 38, 50);" onclick="return confirm('Apakah Anda yakin Untuk Mengedit Data ?')">
                    </div>
                </div>
                </form>
            </div> 
        </div>
  
</body>
</html>