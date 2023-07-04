<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$tipe = $_POST['tipe'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query($koneksi, "update wifi set nama='$nama', alamat='$alamat', deskripsi='$deskripsi', tipe='$tipe', latitude='$latitude', longitude='$longitude' where id_wisata='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
