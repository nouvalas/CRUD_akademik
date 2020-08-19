<?php

    include "koneksi.php";

    //Cek apakah ada nilai dari method GET dengan nama id_matkul
    if (isset($_GET['id_matkul'])) {
        $id_matkul=htmlspecialchars($_GET["id_matkul"]);

        $sql="delete from t_matkul where id_matkul='$id_matkul' ";
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
