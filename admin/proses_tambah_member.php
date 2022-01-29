<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];

if(empty($id_member)){
    echo "<script>alert('Id member tidak boleh kosong');location.href='member.php';</script>";
    } elseif(empty($nama)){
    echo "<script>alert('nama member tidak boleh kosong');location.href='member.php';</script>";
    } elseif(empty($tlp)){
    echo "<script>alert('No Telp tidak boleh kosong');location.href='member.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into member
    (id_member, nama, alamat, jenis_kelamin, tlp) 
    value
    ('".$id_member."','".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan member');location.href='member.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan member');location.href='member.php';</script>";
}
}
}
?>