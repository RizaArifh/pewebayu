<?php 

require '../functions.php';

// ambil data di url
$id = $_GET["id"];

//query data artikel berdasarkan id

$a=mysqli_query($conn,"SELECT * FROM artikel WHERE id = $id");
$art=mysqli_fetch_array($a);

//cek apakah tombol sub,it sudah di dtekan

if (isset($_POST["submit"]) ) {
	
	//cek apakah data berhasil di ubah
	if (ubah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil diubah !')
			document.location.href = 'halladmin.php'
			</script>
		";
	}else{
		echo "
		<script>
			alert('data gagal diubah !')
			document.location.href = 'halladmin.php'
			</script>
		";
		}


}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ubah artikel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
              <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
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
        <div class="container text-center ">

	 <h1>artikel : <?=$art["judul"]; ?></h1> 
	 <form action="" method="post">
	 <input type="hidden" name="id" value="<?= $art["id"];?>">
    
   <img src="../img/<?php echo $art ["gambar"]; ?>" >
   <form action="" method="post">
   <input type="hidden" name="id" value="<?= $art["id"];?>">
    
    <h1>deskripsi: <?=$art["lokasi"]; ?></h1>
   <form action="" method="post">
   <input type="hidden" name="id" value="<?= $art["id"];?>">
	 	
	 			
	 			
	 		<!-- <br>
	 			<label for="gambar">gambar	:</label>
	 			<input type="text" name="gambar" id="gambar"  required 
	 			value="<?= $art["gambar"]; ?>">
	 		<br>
	 		<label for="deskripsi">deskripsi:</label>

	 			<textarea style="resize:none;width:300px;height:100px;"rows="4" cols="40"name="deskripsi" id="deskripsi" required >
	 				<?php echo $art["deskripsi"]; 
	 			 ?>

	 				</textarea>

	 		<br> -->
	 		<button class="btn btn-primary" type="submit" name="submit">ubah artikel</button>
	 		
	 		<a class="btn btn-primary" href="../halladmin.php" role="button">cancel</a>
	 		

	 	
	 </form>

</body>
</html>