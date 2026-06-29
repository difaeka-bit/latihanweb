<?php

require 'connected.php';

if(isset($_GET['kode'])) {
	$kode = $_GET['kode'];
	
	$sql = "SELECT * FROM barang WHERE kode = '$kode' ";
	$result = mysqli_query($koneksi,$sql);
	$keluar = mysqli_fetch_assoc($result);
	
	
}


if (isset($_POST['update'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $kode_spl = $_POST['kodespl'];
    
    $sql = "UPDATE barang SET 
            nama = '$nama', 
            harga = '$harga', 
            jumlah = '$jumlah', 
            kode_spl = '$kode_spl' 
            WHERE kode = '$kode'";
            
    $result_update = mysqli_query($koneksi, $sql);
    
    if ($result_update) {
        echo "<script>alert('Data berhasil diubah!'); window.location='input_barang.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}

?>

