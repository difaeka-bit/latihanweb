<?php

require 'connected.php';

if(isset($_POST['simpan'])) {
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$telpon = $_POST['telpon'];
	
	try{
		$query = "INSERT INTO supplier(kode_spl,nama,alamat,kota,telpon) VALUES('$kode','$nama','$alamat','$kota','$telpon')";
		$result = mysqli_query($koneksi,$query);
		
		if($result) {
			echo "<script>alert('Data telah tersimpan!')</script>";
		}
	}catch(mysqli_sql_exception $e) {
		if($e -> getCode() == 1062) {
			echo "<script>alert('Data sudah ada!'); window.history.back();";
		}
	}
}


?>

<center>
<h1>Input Data Supplier
<form action="" method=post>
<table>
<tr><td>Kode SPL<td><input type=text name=kode>
<tr><td>Nama Perusahaan<td><input type=text name=nama>
<tr><td>Alamat<td><input type=text name=alamat>
<tr><td>Kota<td><input type=text name=kota>
<tr><td>Telpon<td><input type=text name=telpon>
</table>
<input type=submit value="Simpan Data" name=simpan>
<input type=reset>