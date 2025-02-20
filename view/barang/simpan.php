<?php

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO barang VALUES( '$id_barang','$id_jenis','$nama','$harga','$stok')");

if($query){
    echo "<script>alert('Tambah Berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Tambah gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}