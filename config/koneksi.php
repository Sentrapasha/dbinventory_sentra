<?php

$conn = mysqli_connect('localhost','root','','dbinventory_sentra_xi4');

if(!$conn){
    die("Koneksi Gagal".mysqli_connect_error());
}