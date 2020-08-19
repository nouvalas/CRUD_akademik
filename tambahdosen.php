<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Form Data Dosen</title>
  </head>
  <body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nip=input($_POST["nip"]);
        $nama_dosen=input($_POST["nama_dosen"]);

        //Query input menginput data kedalam tabel dosen
        $sql="insert into t_dosen (nip,nama_dosen) values ('$nip','$nama_dosen')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php?page=dosen");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Tambah Dosen</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" placeholder="Masukan NIP" required />

        </div>
        <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" placeholder="Masukan Nama Dosen" required/>

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php?page=dosen" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Batal</a>
    </form>
</div>
</body>
</html>
