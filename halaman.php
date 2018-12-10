<?php 

require ('php/logic.php');

if(isset($_POST["kirim"])){
 
  if(posting($_POST) > 0){
    echo "<script>
            
                alert('berhasil di tambahkan !!!');
                document.location.href='#';
            
            </script>";
 
          }else {
             echo "<script>
            
                alert(' tydac berhasil di tambahkan !!!');
                document.location.href='#';
            
            </script>";
          };


};




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>E-vent</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- nav -->
    <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">E-vent</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Contac Us</a>
      </li>
    </ul>
  </div>
      <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
    </div>
  <!-- akhir nav -->

  <!-- jumbotron -->
<div id="carouselExampleControls" class="carousel slide jbr" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/evt01.png"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/ok1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/13.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <!-- akhir jumbotron -->

 <!-- halaman -->

<div class="container">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Daftar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Pembayaran</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  
  
  
  <!-- Daftar -->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    
  
  <form action="" method="post">
    <div class="form-group">
      <label for="">masukan Gambar</label>
      <input type="file"
        class="form-control" name="gambar" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">*wajib isi</small>
    </div>
  <div class="form-group">
    <label for="">judul</label>
    <input type="text"
      class="form-control" name="judul" id="" aria-describedby="helpId" placeholder="masukan judul">
    <small id="helpId" class="form-text text-muted">*wajib di isi</small>
  </div>

<div class="form-group">
  <label for="">lokasi</label>
  <input type="text"
    class="form-control" name="location" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">*wajib isi</small>
</div>
 <div class="form-group">
   <label for="">Tanggal</label>
   <input type="date"
     class="form-control" name="tanggal" id="" aria-describedby="helpId" placeholder="">
   <small id="helpId" class="form-text text-muted">*wajib isi</small>
 </div>
  <div class="form-group">
    <label for="">Kontak</label>
    <input type="tel"
      class="form-control" name="kontak" id="" pattern="^\d{3}-\d{3}-\d{4}$" aria-describedby="helpId" placeholder="" require>
    <small id="helpId" class="form-text text-muted">*wajib isi</small>
  </div>
<div class="form-group">
  <label for="">Deskripsi</label>
  <textarea class="form-control" name="deskripsi" id="" rows="3"></textarea>
</div>
<button type="submit" name="kirim">Kirim</button>
</form>
  </div>
  <!-- akhir Daftar -->
  
  
  
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>  

</div>









 <!-- akhir  halaman -->
 
























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>