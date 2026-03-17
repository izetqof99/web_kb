<?php
include('../../conf/config.php');
$nik    = $_GET['nik'];
$nama   = $_GET['nama'];
$umur   = $_GET['umur'];
$alamat = $_GET['alamat'];
$jenis_kb = $_GET['jenis_kb'];
$query = mysqli_query($koneksi, "INSERT INTO tabel_kbpp (id,nik,nama,umur,alamat,jenis_kb) VALUES('','$nik','$nama','$umur','$alamat','$jenis_kb')");
header('Location: ../index.php?page=data_kbpp');
?>