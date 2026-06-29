
<link rel="stylesheet" href="w3.css">
<center>
<table class="w3-table-all w3-card">
<?php

require 'connected.php';

if(isset($_POST['cari'])) {
	$nama = $_POST['nama'];
	
	$query = "SELECT * FROM barang WHERE nama Like '%$nama%' ";
	$hasil = mysqli_query($koneksi,$query);
	
		if(mysqli_num_rows($hasil) > 0) {
			echo "<h1 class='w3-round w3-blue w3-card w3-left-align'>Hasil Pencarian Data</h1>";
			echo "<tr><th>Kode Barang<th>Nama Barang<th>Harga<th>Jumlah<th>Kode SPL";
			while($tampil = mysqli_fetch_assoc($hasil)) {
				echo "<tr>";
				echo "<td>$tampil[kode]";
				echo "<td>$tampil[nama]";
				echo "<td>$tampil[harga]";
				echo "<td>$tampil[jumlah]";
				echo "<td>$tampil[kode_spl]";
			}
		}else {
			echo "<script>alert('Data tidak ditemukan')</script>";
		}
}



?>