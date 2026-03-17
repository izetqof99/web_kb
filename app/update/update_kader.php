<?php
include('../../conf/config.php');
$id     = $_POST['id'];
$role    = $_POST['role'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$lokasi_penugasan = $_POST['lokasi_penugasan'];
$nomor_telepon = $_POST['nomor_telepon'];

//Nama Foto//
$nama_file = $_FILES['foto']['name'];
//echo $nama_file;

//Lokasi Foto//
$file_temp      = $_FILES['foto']['tmp_name'];
$query = mysqli_query($koneksi, "UPDATE tbl_kader SET role='$role',nama='$nama',alamat='$alamat',lokasi_penugasan='$lokasi_penugasan',nomor_telepon='$nomor_telepon',foto='$nama_file' WHERE id='$id'");
header('Location: ../index.php?page=data_kader');
?>