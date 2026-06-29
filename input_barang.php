<?php

require 'connected.php';

if(isset($_POST['simpan'])) {
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	$kode_spl = $_POST['kodespl'];
	
	try{
		if(empty($kode) || empty($nama) || empty($harga) || empty($jumlah) || empty($kode_spl)) {
			echo "<script>alert('Data tidak boleh kosong!'); window.history.back(); </script>";
		}else {
			$query = "INSERT INTO barang (kode,nama,harga,jumlah,kode_spl) VALUES('$kode','$nama','$harga','$jumlah','$kode_spl')";
			$result = mysqli_query($koneksi,$query);
			
			if($result) {
				echo "<script>alert('Data telah tersimpan!')</script>";
			}
		}

	
	}catch(mysqli_sql_exception $e) {
		if($e -> getCode() == 1062) {
			echo "<script>alert('Data sudah ada!'); window.history.back(); </script>";	
		}
	}
	
	
}


?>

<link rel="stylesheet" href="w3.css">
<center>
<div class="w3-panel">
<div class="w3-panel w3-round-large w3-blue w3-card">
<h1>Input Data Barang
</div>
<form action="" method=post> 
<table class="w3-table-all w3-card w3-round">
<?php if(isset($_SESSION['berhasil'])) {echo $_SESSION['berhasil'];} ?>
<tr><td>Kode Barang<td><input class="w3-input w3-border w3-round-large" type=text name=kode placeholder="Masukan Kode Barang" required>
<tr><td>Nama Barang<td><input class="w3-input w3-border w3-round-large" type=text name=nama placeholder="Masukan Nama Barang" required>
<tr><td>Harga<td><input class="w3-input w3-border w3-round-large" type=text name=harga placeholder="Masukan Harga" required>
<tr><td>Jumlah<td><input class="w3-input w3-border w3-round-large" type=text name=jumlah placeholder="Masukan Jumlah" required>
<tr><td>Kode Supplier<td><input class="w3-input w3-border w3-round-large" type=text name=kodespl placeholder="Masukan Kode SPL" required>
<tr><td><td>
<input class="w3-button w3-green w3-round-large" type=submit value="Simpan Data" name=simpan>
<input class="w3-button w3-red w3-round-large" type=reset>
<a class="w3-button w3-green w3-round-large" href="pencarian.php">Cari Data
</table>
<?php include 'read_data_input.php'; ?>