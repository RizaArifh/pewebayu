<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tukangjajan");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	$judul = $data["judul"];
	$lokasi = $data["lokasi"];
	// $gambar = $data["gambar"];
	$deskripsi = $data["deskripsi"];

	$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 10440700){			
					move_uploaded_file($file_tmp, 'img/'.$nama);
					$query = "INSERT INTO artikel
				VALUES
			('','$judul','$lokasi','$nama','$deskripsi')
			";
	
			mysqli_query($conn ,$query);

				return mysqli_affected_rows($conn);
 
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}

	//query insert data
	
	



function hapus($id) {
	global $conn;
	mysqli_query($conn , "DELETE FROM artikel WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;
	$id = $data["id"];
	$judul = $data["judul"];
	$lokasi = $data["lokasi"];
	$gambar = $data["gambar"];
	$deskripsi =$data["deskripsi"];

	//query insert data
	$query= "UPDATE artikel SET 
				judul = '$judul',
				lokasi = '$lokasi',
				gambar = '$gambar',
				deskripsi = '$deskripsi'

				WHERE id = $id
				";
	mysqli_query($conn ,$query);

	return mysqli_affected_rows($conn);
}



 ?>
