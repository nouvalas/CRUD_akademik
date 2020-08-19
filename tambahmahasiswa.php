<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Form Data Mahasiswa</title>
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

        $NIM=input($_POST["NIM"]);
        $Nama_mahasiswa=input($_POST["Nama_mahasiswa"]);
        $Tgl_Lahir=input($_POST["Tgl_Lahir"]);
        $Alamat=input($_POST["Alamat"]);

        //Query input menginput data kedalam tabel mahasiswa
        $sql="insert into t_mahasiswa (NIM,Nama_mahasiswa,Tgl_Lahir,Alamat) values
    ('$NIM','$Nama_mahasiswa','$Tgl_Lahir','$Alamat')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php?page=mahasiswa");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Tambah Mahasiswa</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="NIM" class="form-control" placeholder="Masukan NIM" required />

        </div>
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="Nama_mahasiswa" class="form-control" placeholder="Masukan Nama Mahasiswa" required/>

        </div>
        <div class="form-group">
            <label>Tgl Lahir</label>
            <input type="text" name="Tgl_Lahir" class="form-control" placeholder="YYYY-MM-DD" required/>

        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="Alamat" class="form-control" rows="3"placeholder="Masukan Alamat" required></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php?page=mahasiswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Batal</a>
    </form>
</div>
</body>
</html>
