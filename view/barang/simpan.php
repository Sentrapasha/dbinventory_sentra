<?php

$id_barang = $_POST['id_barang'];
$nama_barantg = $_POST['nama_barantg'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$expired = $_POST['expired'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO barang Values('$id_barang','$nama_barantg','$id_jenis','$harga','$expired','$stok')");

if($query){
    echo "<script>alert('Tambah Berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Tambah Gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}