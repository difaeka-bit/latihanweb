<?php
session_start();
require 'connected.php';

if(isset($_GET['kode'])) {
	$kode = $_GET['kode'];
	
	$sql = "DELETE FROM barang WHERE kode = '$kode' ";
	$result = mysqli_query($koneksi,$sql);
	
	if($result) {
		$_SESSION['berhasil'] = "Data telah terhapus";
		header("Location: input_barang.php");
	}else{
		header("Location: input_barang.php");
		exit();
	}
}



?>