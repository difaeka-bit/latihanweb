<center>
<h1>Tampilan Hasil Pencarian</h1>
<table border=1>
<?php

require 'connected.php';

if(isset($_POST['cari'])) {
	$kode = $_POST['kode'];
	
	$query = "SELECT * FROM barang WHERE kode Like '%$kode%'";
	$result = mysqli_query($koneksi,$query);
	
	if(mysqli_num_rows($result) > 0 ) {
		while($tampilkan = mysqli_fetch_assoc($result)) {
			echo "<tr><td>Kode<td><input type=text name='kode' value='$tampilkan[kode]' readonly>";
			echo "<tr><td>Nama<td><input type=text name='nama' value='$tampilkan[nama]' readonly>";
			echo "<tr><td>Harga<td><input type=text name='harga' value='$tampilkan[harga]' readonly>";
			echo "<tr><td>Jumlah<td><input type=text name='jumlah' value='$tampilkan[jumlah]' readonly>";
			echo "<tr><td>Kode SPL<td><input type=text name='kodespl' value='$tampilkan[kode_spl]' readonly>";
	}
}else {
	echo "data tidak ditemukan";
}
}


	
	
	
?>