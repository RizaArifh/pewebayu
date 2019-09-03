<?php 
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
    echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
    echo "
        <script type='text/javascript'>
        alert('Anda telah berhasil logout');
        history.back(self);
        </script>";
  }else if($_GET['pesan'] == "belum_login"){
    echo "Anda harus login untuk mengakses halaman admin";
  }
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tukang Jajan</title>
  
  </head>


 
  <body class="mx-2">
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
        <img src="img/1.png" class="rounded-circle" width="300">
          <h1 class="display-4">Tukang Jajan</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
<!-- about -->
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1> About</h1>
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col text-center">
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
            </div>
          </div>
        </div>

      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1> Content </h1>
          </div>
        </div>
      </div>
<!-- content-->
<div class="row">
        <div class="col-md text-center"> 
            <div class="card" >
            <img src="img/thumbs/1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
<div class="col-md text-center"> 
            <div class="card" >
            <img src="img/thumbs/2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
<div class="col-md text-center"> 
            <div class="card" >
            <img src="img/thumbs/3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
<div class="row">
        <div class="col-md text-center"> 
            <div class="card" >
            <img src="img/thumbs/4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
<div class="col-md text-center"> 
            <div class="card" >
            <img src="img/thumbs/5.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
<div class="col-md text-center"> 
            <div class="card" >
            <img src="img/thumbs/6.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>