<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query berdasarkan id
$simpk = query("SELECT * FROM simpk WHERE id = $id")[0];

// cek apa tombol submit sdh ditekan
if( isset($_POST["submit"]) ) {

// cek apa data berhasil diubah/tidak
	if( ubah($_POST) > 0 ){
		echo "
			<script>
				alert('BERHASIL');
				document.location.href = 'daftar.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('GAGAL');
				document.location.href = 'daftar.php'
			</script>
		";
	}


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
	<title>UBAH DATA</title>
</head>
<body class="bg-dark">
<div class="container ">
	<div class="row justify-content-center">
		<div class="col col-6">
			<div class="card mt-5 mb-5">
				<div class="card-header bg-primary text-white">
					Ubah Data
				</div>			
	<form action="" method="post" >
		<input type="hidden" name="id" value="<?= $simpk["id"]; ?>">
		<div class="card-body">
			<div>
				<label for="nama">Nama Kegiatan : </label>
				<input type="text" name="nama" id="nama" class="form-control" value="<?= $simpk["nama"]; ?>">
			</div>
			<div>
				<label for="penanggungjawab">Penanggungjawab :
				</label>
				<input type="text" name="penanggungjawab" id="penanggungjawab" class="form-control" value="<?= $simpk["penanggungjawab"]; ?>">
			</div>
			<div>
				<label for="tempat">Tempat Pelaksanaan : </label>
				<input type="text" name="tempat" id="tempat" class="form-control" value="<?= $simpk["tempat"]; ?>">
			</div>
			<div>
				<label for="waktu">Waktu Pelaksanaan : </label>
				<input type="text" name="waktu" id="waktu" class="form-control" value="<?= $simpk["waktu"]; ?>">
			</div>
			<div>
				<label for="pencapaian">Pencapaian : </label>
				<input type="text" name="pencapaian" id="pencapaian" class="form-control" value="<?= $simpk["pencapaian"]; ?>">
			</div>
			<div>
				<label for="evaluasi">Evaluasi : </label>
				<input type="text" name="evaluasi" id="evaluasi" class="form-control" value="<?= $simpk["pencapaian"]; ?>">
			</div>
			<div>
				<label for="keterangan">Keterangan : </label>
				<br>
				<img src="img/<?= $simpk['keterangan']; ?>" width="40">
				<input type="file" name="keterangan" id="keterangan">
			</div>
		</div>
			<div class="card-footer">
				<a href="daftar.php" class="btn btn-danger">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Confirm</button>
			</div>


	</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>