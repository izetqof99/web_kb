<?php
include('../../conf/config.php');
$nik    = $_GET['nik'];
$nama   = $_GET['nama'];
$umur   = $_GET['umur'];
$alamat = $_GET['alamat'];
$usia_kandungan = $_GET['usia_kandungan'];
$jumlah_anak = $_GET['jumlah_anak'];
$query = mysqli_query($koneksi, "INSERT INTO tabel_ibu (id,nik,nama,umur,alamat,usia_kandungan,jumlah_anak) VALUES('','$nik','$nama','$umur','$alamat','$usia_kandungan','$jumlah_anak')");
header('Location: ../index.php?page=data_ibu_hamil');
?>