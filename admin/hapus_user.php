<?php
    if($_GET['id_user']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from user where id_user='".$_GET['id_user']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Hapus user');location.href='user.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus user');location.href='user.php';</script>";
        }
    }
?>