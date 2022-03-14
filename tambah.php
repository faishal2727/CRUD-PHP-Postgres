<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body style="background-color:rgb(220,222,224);">
    <?php include 'nav.php';?>
        <div class="container">
            <div class="card mt-3">
                <form method="post" action="tambah_proses.php" >
                    <div class="card-body shadow" style="margin:auto;" >
                        <h3 class="text-center"><b>Tambah Data</b></h3>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim"  name="nim" placeholder="masukan nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama" required>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select class="form-control" name="prodi" id="prodi" required>
                            <option value="TI">TI</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Elektro">Elektro</option>
                            <option value="Komputer">Komputer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
                        <input  type="submit" name="submit" class="btn mt-3 text-white" value="SIMPAN" style="background-color:rgb(32, 38, 50);" onclick="return confirm('Simpan Data ?')">
                    </div>
                    </div>
                </form>
            </div>  
        </div>
</body>
</html>
