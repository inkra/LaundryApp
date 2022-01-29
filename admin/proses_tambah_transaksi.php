<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $id_member=$_POST['id_member'];
    $id_outlet=$_POST['id_outlet'];
    $id_paket=$_POST['id_paket'];
    $id_user=$_POST['id_user'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];

if(empty($id_transaksi)){
    echo "<script>alert('Id transaksi tidak boleh kosong');location.href='transaksi.php';</script>";
    } elseif(empty($id_member)){
    echo "<script>alert('Id member tidak boleh kosong');location.href='transaksi.php';</script>";
    } else {
    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into transaksi
    (id_transaksi, id_member, id_outlet, id_paket, id_user, tgl, batas_waktu, status, dibayar) 
    value
    ('".$id_transaksi."','".$id_member."','".$id_outlet."','".$id_paket."','".$id_user."','".$tgl."','".$batas_waktu."','".$status."','".$dibayar."')") or
    die(mysqli_error($conn));
if($insert){
    echo "<script>alert('Sukses menambahkan transaksi');location.href='transaksi.php';</script>";
} else {
    echo "<script>alert('Gagal menambahkan transaksi');location.href='transaksi.php';</script>";
}
}
}
?>