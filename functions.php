<?php 
// konek k database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$penanggungjawab = htmlspecialchars($data["penanggungjawab"]);
	$tempat = htmlspecialchars($data["tempat"]);
	$waktu = htmlspecialchars($data["waktu"]);
	$pencapaian = htmlspecialchars($data["pencapaian"]);
	$evaluasi = htmlspecialchars($data["evaluasi"]);

// upload gambar
	$keterangan = upload();
	if( !$keterangan) {
		return false;
	}

	$query = "INSERT INTO simpk
				VALUES
				('', '$nama', '$penanggungjawab', '$tempat', '$waktu', '$pencapaian', '$evaluasi', '$keterangan')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){

	$namaFile = $_FILES['keterangan']['name'];
	// $ukuranFile = $_FILES['keterangan']['size'];
	$error = $_FILES['keterangan']['error'];
	$tmpName = $_FILES['keterangan']['tmp_name'];
// cek apa gmbr tdk di upload
	if($error === 4){
	echo "
		<script>
		alert('MASUKKAN GAMBAR');
		</script>";
		return false;
		}
//  cek apa yg diupload adalah gmbr
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile); 
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid)){ echo "
		<script>
		alert('YANG DI UPLOAD GAMBAR');
		</script>";
		return false;
}
// cek apa ukuran trlalu bsr
		// if ( $ukuranFile > 1000000 ) {
		// 	echo "
		// <script>
		// alert('UKURAN GAMBAR TERLALU BESAR');
		// </script>";
		// return false;
		// }
// lolos pengecekan, gambar siap di upload
// generat nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .='.';
		$namaFileBaru .= $ekstensiGambar; 

		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

		return $namaFileBaru;
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM simpk WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubah($data){
		global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$penanggungjawab = htmlspecialchars($data["penanggungjawab"]);
	$tempat = htmlspecialchars($data["tempat"]);
	$waktu = htmlspecialchars($data["waktu"]);
	$pencapaian = htmlspecialchars($data["pencapaian"]);
	$evaluasi = htmlspecialchars($data["evaluasi"]);
	$keterangan = htmlspecialchars($data["keterangan"]);

	$query = "UPDATE simpk SET
				nama = '$nama',
				penanggungjawab = '$penanggungjawab',
				tempat = '$tempat',
				waktu = '$waktu',
				pencapaian = '$pencapaian',
				evaluasi = '$evaluasi',
				keterangan = '$keterangan'
				WHERE id = $id
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari($keyword) {
	$query = "SELECT * FROM simpk
				WHERE
				nama LIKE '%$keyword%' OR
				penanggungjawab LIKE '%$keyword%' OR
				tempat LIKE '%$keyword%' OR
				waktu LIKE '%$keyword%'
				";
		return query($query);
}

function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	
	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('username sudah terdaftar!')
			  </script>";
			return false;
	}

	//cek konfirmasi password
	if($password !== $password2){
		echo "<script>
				alert('kofirmasi password tidak sesuai!');
			  </script>"; 
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
	return mysqli_affected_rows($conn);
}
 ?>