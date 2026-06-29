<link rel="stylesheet" href="w3.css">
<center>
<h1 class="w3-left-align w3-card w3-round-large">Tampilan Data Barang
<table class="w3-table-all" border=1 >
<tr><th>Kode Barang<th>Nama Barang<th>Harga<th>Jumlah<th>Total<th>Kode SPL<th colspan=2>Aksi
<?php

require 'connected.php';

$query = "SELECT * FROM barang";
$ambil_data = mysqli_query($koneksi,$query);

while($tampilkan = mysqli_fetch_assoc($ambil_data)) {
	
	$total = $tampilkan['harga'] * $tampilkan['jumlah'];
	
	echo "<tr>";
	echo "<td>$tampilkan[kode]";
	echo "<td>$tampilkan[nama]";
	echo "<td>$tampilkan[harga]";
	echo "<td>$tampilkan[jumlah]";
	echo "<td>$total";
	echo "<td>$tampilkan[kode_spl]";
	echo "<td><a class='w3-red w3-round-large w3-button' href='delete_input.php?kode=$tampilkan[kode]' onclick='return confirm(\"Yakin akan dihapus?\")'>Hapus</a>";
	echo "<td><a class='w3-green w3-round-large w3-button' href='update_input.php?kode=$tampilkan[kode]' onclick='return confirm(\" Yakin akan ubah data \")'>Ubah</a>";
}




?>