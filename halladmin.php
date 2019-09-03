<?php 
require 'functions.php';
 $artikel = query("SElECT * FROM artikel ORDER BY id DESC");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hal ADMIN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../tabel.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Tukang Jajan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Location
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="jakarta.html">jakarta</a>
                <a class="dropdown-item" href="bandung.html">Bandung</a>
                <a class="dropdown-item" href="jogja.html">Yogyakarta</a>
              </div>
            </li>
            <?php 
            session_start();
            if(empty($_SESSION)){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">login</a>
            </li>
            <?php 
        	}else{

            }?>
            <li class="nav-item">
              <a class="nav-link" href="#">Travel</a>
            </li>
            <?php 
            
            if(!empty($_SESSION)){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="halladmin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="back/logout.php">Logout</a>
            </li>
            <?php
            }else{
            
            }
            if(!empty($_SESSION)){
            ?>
            
            <li class="nav-item">
              <a class="nav-link" href="">selamat datang <?php echo $_SESSION['username']?>;</a>
            </li>
            <?php
        }
            ?>
          </ul>
        </div>
        </div>
      </nav>
<!-- jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
        <h1>Artikel</h1>
<a href="tambah.php"><button type="button" class="btn btn-primary">tambah artikel</button></a>

</div>
</div>
 
<table class="table1" border="1" align=center cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>pilihan</th>
		<th>gambar</th>
		<th>judul</th>
		<th>lokasi</th>
		<th>deskripsi</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ( $artikel as $row ) : ?>

	<tr>
		<td><?php echo $i; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $row ["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?php echo $row ["id"]; ?>"onclick="return confirm ('yakin tak?');">hapus</a>
		</td>
		<td><img src="img/<?php echo $row ["gambar"]; ?>" width="100px" height="100px"></td>
		<td><a href="artikel/artc.php?id=<?php echo $row ["id"]; ?>"><?php echo $row["judul"]; ?></a></td>
		<td><?php echo $row["lokasi"]; ?></td>
		<td><?php echo $row["deskripsi"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
 
</table>
        
      
<!-- about -->
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>