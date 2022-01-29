<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $id_outlet=$_POST['id_outlet'];
    $jenis=$_POST['jenis'];
    $nama_paket=$_POST['nama_paket'];
    $harga=$_POST['harga'];

if(empty($id_paket)){
    echo "<script>alert('Id paket tidak boleh kosong');location.href='paket.php';</script>";
    } elseif(empty($jenis)){
    echo "<script>alert('Jenis paket tidak boleh kosong');location.href='paket.php';</script>";
    } elseif(empty($harga)){
    echo "<script>alert('Harga tidak boleh kosong');location.href='paket.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into paket
    (id_paket, id_outlet, jenis, nama_paket, harga) 
    value
    ('".$id_paket."','".$id_outlet."','".$jenis."','".$nama_paket."','".$harga."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan paket');location.href='paket.php';</script>";
}
}
}
?>