<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_dosen
    if (isset($_GET['id_dosen'])) {
        $id_dosen=htmlspecialchars($_GET["id_dosen"]);

        $sql="delete from t_dosen where id_dosen='$id_dosen' ";
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
