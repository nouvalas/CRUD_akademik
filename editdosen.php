<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Universitas Komputer Indonesia</title>
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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_dosen
    if (isset($_GET['id_dosen'])) {
        $id_dosen=input($_GET["id_dosen"]);

        $sql="select * from t_dosen where id_dosen=$id_dosen";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_dosen=htmlspecialchars($_POST["id_dosen"]);
        $nip=input($_POST["nip"]);
        $nama_dosen=input($_POST["nama_dosen"]);

        //Query update data pada tabel dosen
        $sql="update t_dosen set
            nip='$nip',
            nama_dosen='$nama_dosen'
            where id_dosen=$id_dosen";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php?page=dosen");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" placeholder="Masukan NIP" required />

        </div>
        <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" value="<?php echo $data['nama_dosen']; ?>" placeholder="Masukan Nama Dosen" required/>
        </div>


        <input type="hidden" name="id_dosen" value="<?php echo $data['id_dosen']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php?page=dosen" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Batal</a>
    </form>
</div>
</body>
</html>