<link rel="stylesheet" href="w3.css">
<form action="" method=post>
<center>
<h1 class="w3-blue w3-card">Form Pencarian Data Barang</h1>

<table class="w3-table-all">
<tr><td class="w3-sans-serif">Nama barang<td><input class="w3-input w3-round w3-border" type=text name="nama" placeholder="Masukan Nama Barang">
<td colspan=2><input class="w3-button w3-green w3-round-large" type=submit name="cari" value="Cari Data">
<input class="w3-button w3-red w3-round-large"  type=reset>
<a class="w3-green w3-round w3-button" href="input_barang.php">Input Data
</td>
</div>
</table>
<?php

include 'proses_pencarian.php';

?>