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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tambahan.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

    <title>Tukang Jajan</title>
  
  </head>


 
<body>
<div class="container-fluid">
<!-- <div class="row"> -->

<div class="row">
<div class="col">
  <div class="sidenav">
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
</div>

       <div class="col">

          <div class="row">
              <div  class="side-menu col">
                <button type="button" class="btn btn-primary btn-md">Kegiatan Sesuai KRA</button>
              </div>  
          </div>
          <div class="row">
              <div  class="side-menu col">
                <button type="button" class="btn btn-primary btn-md">Sertifikasi</button>
              </div>  
          </div>
          <div class="row">
              <div  class="side-menu col">
                <button type="button" class="btn btn-primary btn-md">KAS BON</button>
              </div>  
          </div>
          <div class="row">
              <div  class="side-menu col">
                <button type="button" class="btn btn-primary btn-md">Petty Cash</button>
              </div>  
          </div>
          <div class="row">
              <div  class="side-menu col">
                <button type="button" class="btn btn-primary btn-md">Lain-Lain</button>
              </div>  
          </div>
          <div class="row">
              <div  class="side-menu col">
                <button type="button" class="btn btn-primary btn-md">Data Base Edit Transaksi</button>
              </div>  
          </div>

      </div>

<!-- batas -->        

    <div class="col">

    <div class="row">
        <div  class="side-menu col">
          <button type="button" class="btn btn-primary btn-md">Rekap Kegiatan Sesuai KRA</button>
        </div>  
    </div>


        <div class="row">
            <div  class="side-menu col">
              <button type="button" class="btn btn-primary btn-md">Rekap Sertifikasi</button>
            </div>  
        </div>
        <div class="row">
            <div  class="side-menu col">
              <button type="button" class="btn btn-primary btn-md">Rekap KAS BON</button>
            </div>  
        </div>
        <div class="row">
            <div  class="side-menu col">
              <button type="button" class="btn btn-primary btn-md">Rekap Petty Cash</button>
            </div>  
        </div>
        <div class="row">
            <div  class="side-menu col">
              <button type="button" class="btn btn-primary btn-md">Rekap Lain-Lain</button>
            </div>  
        </div>
        <div class="row">
            <div  class="side-menu col">
              <button type="button" class="btn btn-primary btn-md">Rekap Total</button>
            </div>  
        </div>
    
    </div>

</div>



</div>

<!-- </div> -->
</body>
</html>