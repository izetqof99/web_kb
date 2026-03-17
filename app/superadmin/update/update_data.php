<?php
include('../../conf/config.php');
$id     = $_POST['id'];
$nik    = $_POST['nik'];
$nama   = $_POST['nama'];
$umur   = $_POST['umur'];
$alamat = $_POST['alamat'];
$usia_kandungan = $_POST['usia_kandungan'];
$jumlah_anak = $_POST['jumlah_anak'];

//Nama Foto//
$nama_file = $_FILES['foto']['name'];
//echo $nama_file;

//Lokasi Foto//
$file_temp      = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_temp,'../foto/'.$nama_file);
$query = mysqli_query($koneksi, "UPDATE tabel_ibu SET nik='$nik',nama='$nama',umur='$umur',alamat='$alamat',usia_kandungan='$usia_kandungan',jumlah_anak='$jumlah_anak',foto='$nama_file' WHERE id='$id'");
header('Location: ../index.php?page=data_ibu_hamil');
?>