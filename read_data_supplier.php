<center>
<h1>Tampilan Data Supplier
<table border=1>
<tr><th>Kode Barang<th>Nama Barang<th>Harga<th>Jumlah<th>Kode SPL<th>Nama Perusahaan<th>Alamat<th>Kota<th>Telpon
<?php

require 'connected.php';

$query = "SELECT barang.kode,barang.nama,barang.harga,barang.jumlah,supplier.kode_spl,supplier.nama,supplier.alamat,supplier.kota,supplier.telpon 
		FROM barang,supplier WHERE barang.kode_spl=supplier.kode_spl";
$result = mysqli_query($koneksi,$query);

while($tampilkan = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>$tampilkan[kode]";
	echo "<td>$tampilkan[nama]";
	echo "<td>$tampilkan[harga]";
	echo "<td>$tampilkan[jumlah]";
	echo "<td>$tampilkan[kode_spl]";
	echo "<td>$tampilkan[nama]";
	echo "<td>$tampilkan[alamat]";
	echo "<td>$tampilkan[kota]";
	echo "<td>$tampilkan[telpon]";
	
	
}


?>

