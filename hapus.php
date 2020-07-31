<?php 
require 'functions.php';


$id = $_GET["id"];

if( hapus($id) > 0 ) {
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

 ?>