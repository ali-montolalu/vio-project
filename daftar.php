<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require 'functions.php';
$simpk = query("SELECT * FROM simpk");
// ketika tombol cari di klik
if( isset($_POST["cari"]) ){
	$simpk = cari($_POST["keyword"]);
} 


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
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" >Daftar</a>
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

<form action="" method="post" class="mt-4">
<div class="container">
    <div class="row ">
    <input type="text" name="keyword" size="50" autofocus placeholder="masukkan pencarian" autocomplete="off">
    <div class="col ">
      <button type="submit" name="cari" class="btn btn-success">CARI</button>
    </div>
    <div class="col col-lg-1">
    <a href="index.php" class="btn btn-danger">Home</a>
    </div>
  </div>
</form>
<div class="row">
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
            <th scope="col">Evaluasi</th>
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
            <td><?= $row["evaluasi"]; ?></td>
			<td><img src="img/<?= $row["keterangan"]; ?>" width="80"></td>
		</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
	</tbody>
</table>
</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/jquery-3.4.1.slim.min.js" ></script>
    <script src="assets/popper.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>