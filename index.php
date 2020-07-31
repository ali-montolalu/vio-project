<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

// require 'functions.php';
// $simpk = query("SELECT * FROM simpk");
// // ketika tombol cari di klik
// if( isset($_POST["cari"]) ){
// 	$simpk = cari($_POST["keyword"]);
// } 


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/fontawesome/js/all.js"></script>
	<title>Halaman Admin</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" >Dashboard/ Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	
  <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="register.php">Regist</a>
    </div>
  </div> -->

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <form class="form-inline my-2 my-lg-0">
	  <a href="logout.php" class="btn btn-outline-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </form>
  </div> -->
</nav>

<div class="container">
<div class="row justify-content-center">
<h1 class="text-center text-light mt-4 col col-10">WELCOME TO SIMPK</h1>
</div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
	<a href="tambah.php" class="btn btn-primary mt-5" style="width: 14rem; height: 10rem;">
<i class="fas fa-plus" style="width: 10rem; height: 80px;"></i><H5>TAMBAH DATA PROGRAM KERJA</H5></a>
    </div>
    <div class="col-4">
	<a href="daftar.php" class="btn btn-success mt-5 " style="width: 14rem; height: 10rem;">
<i class="fas fa-list" style="width: 10rem; height: 80px;"></i><H5>DAFTAR PROGRAM KERJA</H5></a>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-4">
	<a href="register.php" class="btn btn-warning mt-5 " style="width: 14rem; height: 10rem;">
<i class="fas fa-user" style="width: 10rem; height: 80px;"></i><H5>REGISTER</H5></a>
    </div>
    <div class="col-4">
	<a href="logout.php" class="btn btn-danger mt-5 " style="width: 14rem; height: 10rem;">
<i class="fas fa-sign-out-alt" style="width: 10rem; height: 80px;"></i><H5>LOGOUT</H5></a>
    </div>
  </div>
</div>
<!-- <form action="" method="post" class="mt-4">
	
	<input type="text" name="keyword" size="50" autofocus placeholder="masukkan pencarian" autocomplete="off">
	<button type="submit" name="cari" class="btn btn-success">CARI</button>

</form>
<table class=" table mb-5 mt-2">
	<thead class="thead-dark">
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Aksi</th>
			<th scope="col">Nama Kegiatan</th>
			<th scope="col">Penanggungjawab</th>
			<th scope="col">Tempat Pelaksanaan</th>
			<th scope="col">Waktu Pelaksanaan</th>
			<th scope="col">Pencapaian</th>
			<th scope="col">Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
			<?php foreach( $simpk as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>" class="badge badge-success">ubah</a> 
				<a href="hapus.php?id=<?= $row["id"]; ?>" class="badge badge-danger" onclick="return confirm('YAKIN?');">hapus</a>
			</td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["penanggungjawab"]; ?></td>
			<td><?= $row["tempat"]; ?></td>
			<td><?= $row["waktu"]; ?></td>
			<td><?= $row["pencapaian"]; ?></td>
			<td><img src="img/<?= $row["keterangan"]; ?>" width="80"></td>
		</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
	</tbody>
</table>
</div> -->
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/jquery-3.4.1.slim.min.js" ></script>
    <script src="assets/popper.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
