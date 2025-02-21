<?php

$id_barang = $_GET['id_barang'];
$nama_barantg = $_POST['nama_barantg'];
$harga = $_POST['harga'];
$expired = $_POST['expired'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET nama_barantg='$nama_barantg', harga='$harga',
expired='$expired', stok='$stok' WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Edit Berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Edit Gagal')</script>";
    echo "<script>window.location.href='viewedit.php'</script>";
}