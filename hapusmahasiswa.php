<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_mahasiswa
    if (isset($_GET['id_mahasiswa'])) {
        $id_mahasiswa=htmlspecialchars($_GET["id_mahasiswa"]);

        $sql="delete from t_mahasiswa where id_mahasiswa='$id_mahasiswa' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>
