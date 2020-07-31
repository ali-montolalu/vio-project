<?php 
require 'functions.php';
// cek apa tombol submit sdh ditekan
if( isset($_POST["submit"]) ) {


// cek apa data berhasil ditambah/tidak
	if( tambah($_POST) > 0 ){
		echo "
			<script>
				alert('BERHASIL');
				document.location.href = 'index.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('GAGAL');
				document.location.href = 'index.php'
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
	<title>TAMBAH DATA</title>
</head>
<body class="bg-dark">
<div class="container ">
	<div class="row justify-content-center">
		<div class="col col-6">
			<div class="card mt-5 mb-5">
				<div class="card-header bg-primary text-white">
					Tambah Data
				</div>			
				<form action="" method="post" enctype="multipart/form-data">
					<div class="card-body">
						<div class="form-group">
							<label for="nama">Nama Kegiatan  </label>
							<input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="penanggungjawab">Penanggungjawab 
							</label>
							<input type="text" name="penanggungjawab" id="penanggungjawab" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="tempat">Tempat Pelaksanaan  </label>
							<input type="text" name="tempat" id="tempat" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="waktu">Waktu Pelaksanaan  </label>
							<input type="text" name="waktu" id="waktu" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="pencapaian">Pencapaian  </label>
							<input type="text" name="pencapaian" id="pencapaian" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="evaluasi">Evaluasi  </label>
							<input type="text" name="evaluasi" id="evaluasi" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan  </label>
							<br>
							<input type="file" name="keterangan" id="keterangan">
						</div>
					</div>
						<div class="card-footer">
							<a href="index.php" class="btn btn-danger">Back</a>
							<button type="submit" name="submit" class="btn btn-primary">Confirm</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/jquery-3.4.1.slim.min.js" ></script>
    <script src="assets/popper.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>