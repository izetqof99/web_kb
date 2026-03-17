<?php
include('../../conf/config.php');
$role    = $_GET['role'];
$nama   = $_GET['nama'];
$alamat = $_GET['alamat'];
$lokasi_penugasan = $_GET['lokasi_penugasan'];
$nomor_telepon = $_GET['nomor_telepon'];
$query = mysqli_query($koneksi, "INSERT INTO tbl_kader (id,role,nama,alamat,lokasi_penugasan,nomor_telepon) VALUES('','$role','$nama','$alamat','$lokasi_penugasan','$nomor_telepon')");
header('Location: ../index.php?page=data_kader');
?>