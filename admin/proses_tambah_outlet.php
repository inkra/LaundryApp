<?php
if($_POST){
    $id_outlet=$_POST['id_outlet'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];

if(empty($id_outlet)){
    echo "<script>alert('Id outlet tidak boleh kosong');location.href='outlet.php';</script>";
    } elseif(empty($nama)){
    echo "<script>alert('nama outlet tidak boleh kosong');location.href='outlet.php';</script>";
    } elseif(empty($tlp)){
    echo "<script>alert('No Telp tidak boleh kosong');location.href='outlet.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into outlet
    (id_outlet, nama, alamat, tlp) 
    value
    ('".$id_outlet."','".$nama."','".$alamat."','".$tlp."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan outlet');location.href='outlet.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan outlet');location.href='outlet.php';</script>";
}
}
}
?>