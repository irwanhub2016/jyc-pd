<?php

error_reporting(0);
ini_set('display_errors', 0);

require 'db.php';

ini_set('date.timezone', 'Asia/Jakarta');


if(isset($_POST["submit"]))
{

	$judul_informasi = $_POST['judul_informasi'];
	$deskripsi_informasi = $_POST['deskripsi_informasi'];
	$nama_pengirim = $_POST['nama_pengirim'];
	$email_pengirim = $_POST['email_pengirim'];
	$tanggal_informasi = date("Y-m-d H:i");

	$judul_informasi = stripslashes($judul_informasi);
	$deskripsi_informasi = stripslashes($deskripsi_informasi);
	$nama_pengirim = stripslashes($nama_pengirim);
	$email_pengirim = stripslashes($email_pengirim);
	$tanggal_informasi = stripslashes($tanggal_informasi);

	$judul_informasi = mysqli_real_escape_string($mysql,$judul_informasi);
	$deskripsi_informasi = mysqli_real_escape_string($mysql,$deskripsi_informasi);
	$nama_pengirim = mysqli_real_escape_string($mysql,$nama_pengirim);
	$email_pengirim = mysqli_real_escape_string($mysql,$email_pengirim);
	$tanggal_informasi = mysqli_real_escape_string($mysql,$tanggal_informasi);

	$query_message = mysqli_query($mysql, "INSERT INTO tbl_informasi (judul_informasi, deskripsi_informasi, tanggal_informasi, nama_pengirim, email_pengirim) VALUES ('$judul_informasi', '$deskripsi_informasi', '$tanggal_informasi', '$nama_pengirim', '$email_pengirim')");
						 
		if($query_message)

			{

					echo "<script language='javascript'>alert('Berhasil kirim pesan. Tunggu informasi selanjutnya dari kami :)'); document.location='../contact.html'</script>";

									/*echo '

									<!DOCTYPE html>
									<html>
									<head>
									<title>Jakarta Youth Choir</title>
								    <link rel="icon" href="images/logo.png">
									<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>

									</head>
									<body onload="sweet()">

									  <script>
									function sweet (){
									swal({
									  title: "Selamat",
									  text: "Pesan kamu berhasil dikirim. Tunggu informasi selanjutnya dari kami :)",
									  icon: "success",
									  button: "Ok!",
									})
									.then((value) => {
									  window.location.href="../contact.html";
									});
									}
									</script>
									</body>
									</html>
									';*/
			}

		else
			
			{

					echo "<script language='javascript'>alert('Maaf ada masalah, belum dapat kirim pesan ke kami :('); document.location='../contact.html'</script>";

									/*echo '

									<!DOCTYPE html>
									<html>
									<head>
									<title>Jakarta Youth Choir</title>
								    <link rel="icon" href="images/logo.png">
									<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

									</head>
									<body onload="sweet()">

									  <script>
									function sweet (){
									swal({
									  title: "Upsss ...",
									  text: "Ada masalah, pesan kamu gagal dikirim :(",
									  icon: "warning",
									  button: "Ok!",
									})
									.then((value) => {
									  window.location.href="../contact.html";
									});
									}
									</script>
									</body>
									</html>
									';*/
			}
 

}

?>
