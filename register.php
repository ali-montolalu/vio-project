<?php 
require 'functions.php';

if(isset($_POST["register"])){
	if(registrasi($_POST) > 0){
		echo "<script>
				alert('user baru berhasil ditambahkan');
			  </script>";
	} else {
		echo mysqli_error($conn);
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

<!-- <form action="" method="post">
	<ul>
		<li>
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<li>
			<button type="submit" name="register">Register!</button>
		</li>
	</ul>
</form> -->
<div class="container ">
	<div class="row justify-content-center">
		<div class="col col-6">
			<div class="card mt-5 mb-5">
				<div class="card-header bg-primary text-white">
					Register
				</div>			
				<form action="" method="post" enctype="multipart/form-data">
					<div class="card-body">
						<div class="form-group">
							<label for="username">Username  </label>
							<input type="text" name="username" id="username" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password">Password 
							</label>
							<input type="password" name="password" id="password" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password2">Konfirmasi password  </label>
							<input type="password" name="password2" id="password2" class="form-control" autocomplete="off">
						</div>
					</div>
						<div class="card-footer">
							<a href="index.php" class="btn btn-danger">Back</a>
							<button type="submit" name="register" class="btn btn-primary">Confirm</button>
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