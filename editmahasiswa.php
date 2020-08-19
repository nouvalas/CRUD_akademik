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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_mahasiswa
    if (isset($_GET['id_mahasiswa'])) {
        $id_mahasiswa=input($_GET["id_mahasiswa"]);

        $sql="select * from t_mahasiswa where id_mahasiswa=$id_mahasiswa";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_mahasiswa=htmlspecialchars($_POST["id_mahasiswa"]);
        $NIM=input($_POST["NIM"]);
        $Nama_mahasiswa=input($_POST["Nama_mahasiswa"]);
        $Tgl_Lahir=input($_POST["Tgl_Lahir"]);
        $Alamat=input($_POST["Alamat"]);

        //Query update data pada tabel dosen
        $sql="update t_mahasiswa set
            NIM='$NIM',
            Nama_mahasiswa='$Nama_mahasiswa',
            Tgl_Lahir='$Tgl_Lahir',
            Alamat='$Alamat'
            where id_mahasiswa=$id_mahasiswa";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php?page=mahasiswa");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="NIM" class="form-control" value="<?php echo $data['NIM']; ?>" placeholder="Masukan NIM" required />

        </div>
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="Nama_mahasiswa" class="form-control" value="<?php echo $data['Nama_mahasiswa']; ?>" placeholder="Masukan Nama Mahasiswa" required/>

        </div>

        <div class="form-group">
            <label>Tgl Lahir</label>
            <input type="text" name="Tgl_Lahir" class="form-control" value="<?php echo $data['Tgl_Lahir']; ?>" placeholder="YYYY-MM-DD" required/>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="Alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required><?php echo $data['Alamat']; ?></textarea>

        </div>

        <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php?page=mahasiswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Batal</a>
    </form>
</div>
</body>
</html>