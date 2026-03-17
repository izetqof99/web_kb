<?php
include('../../conf/config.php');
$id     = $_POST['id'];
$nik    = $_POST['nik'];
$nama   = $_POST['nama'];
$umur   = $_POST['umur'];
$alamat = $_POST['alamat'];
$jenis_kb = $_POST['jenis_kb'];


$query = mysqli_query($koneksi, "UPDATE tabel_kbpp SET nik='$nik',nama='$nama',umur='$umur',alamat='$alamat',jenis_kb='$jenis_kb' WHERE id='$id'");
header('Location: ../index.php?page=data_kbpp');
?>