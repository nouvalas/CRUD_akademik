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
     <h2>Data Dosen</h2>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
        <?php
        include "koneksi.php";
        $sql="select * from t_dosen order by id_dosen asc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nip"]; ?></td>
                <td><?php echo $data["nama_dosen"];   ?></td>
                <td>
                    <a href="editdosen.php?id_dosen=<?php echo htmlspecialchars($data['id_dosen']); ?>" class="btn btn-success" role="button">Edit</a>
                    <a href="hapusdosen.php?id_dosen=<?php echo htmlspecialchars($data['id_dosen']); ?>" class="btn btn-danger" role="button">Hapus</a>
                    
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="tambahdosen.php" class="btn btn-primary" role="button">Tambah Data</a>

</div>
</body>
</html>