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
     <h2>Data Mahasiswa</h2>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
        <?php
        include "koneksi.php";
        $sql="select * from t_mahasiswa order by id_mahasiswa asc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["NIM"]; ?></td>
                <td><?php echo $data["Nama_mahasiswa"];   ?></td>
                <td><?php echo $data["Tgl_Lahir"];   ?></td>
                <td><?php echo $data["Alamat"];   ?></td>
                <td>
                    <a href="editmahasiswa.php?id_mahasiswa=<?php echo htmlspecialchars($data['id_mahasiswa']); ?>" class="btn btn-success" role="button">Edit</a>
                    <a href="hapusmahasiswa.php?id_mahasiswa=<?php echo htmlspecialchars($data['id_mahasiswa']); ?>" class="btn btn-danger" role="button">Hapus</a>
                    
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="tambahmahasiswa.php" class="btn btn-primary" role="button">Tambah Data</a>

</div>
</body>
</html>