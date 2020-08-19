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

    <!-- As a heading -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">UNIKOM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=matkul">Mata Kuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=dosen">Dosen</a>
      </li>      
    </ul>
  </div>
  </div>
</nav>


<div id="page-wrapper" >
          <div id="page-inner">
           <?php  
           if (isset($_GET['page']))
           {
            if ($_GET['page']=="mahasiswa")
            {
              include "mahasiswa.php";
            }                  
            else if ($_GET['page']=="matkul")
            {
              include "matkul.php";
            }
            else if ($_GET['page']=="dosen")
            {
              include "dosen.php";
            }                        
          }
          else
          {
            include 'home.php';
          }
          ?>

</body>
</html>