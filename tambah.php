<?php 

require 'functions.php';


$lokasi=mysqli_query($conn,"SELECT nama FROM lokasi ");



if (isset($_POST["submit"]) ) {
	
	//cek apakah data berhasil di tambahkan
	if (tambah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan !')
			document.location.href = 'halladmin.php'
			</script>
		";
	}else{
		echo "
		<script>
			alert('data gagal ditambahkan !')
			document.location.href = 'tambah.php'
			</script>
		";
		}


}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah artikel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../ubah.css">
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
        <div class="container text-center ">

<fieldset>	 
	 <legend>tambah artikel</legend>

	 <form action="" method="post" enctype="multipart/form-data">
	 	<br>
	 			<label for="judul">judul	:</label>
	 			<input type="text" name="judul" id="judul" required="">
	 		<br>
	 			<label for="lokasi">lokasi	:</label>
	 			<select name="lokasi">
          <?php
          foreach ($lokasi as $lok) {
           ?>
           <option value="<?php echo $lok['nama'] ?>"><?php echo $lok['nama'] ?></option>
           <?php 
           }
            ?>

                

        </select>


	 		<br>
	 			<label for="gambar">gambar	:</label>
        <input type="file" name="file">
    <input type="submit" name="upload" value="Upload">
	 			<!-- <input type="file" name="gambar" accept="image/*" id="gambar" required=""> -->
	 			 			
	 		<br>
	 			<label for="deskripsi">deskripsi	:</label>
	 			<textarea cols="40" name="deskripsi" id="deskripsi" required="">
	 				</textarea>
</fieldset>	 			
	 			<!-- <input type="text" name="deskripsi" id="deskripsi" style=""  required=""> -->
	 		
	 		<br>
	 		<button class="btn btn-primary" type="submit" name="submit">Tambah artikel</button>

      <a class="btn btn-primary" href="halladmin.php" role="button">cancel</a>
      
	 		
	 		</li>

	 	</ul>
	 </form>

</body>
</html>