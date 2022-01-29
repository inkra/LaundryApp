<?php
    if($_GET['id_outlet']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from outlet where id_outlet='".$_GET['id_outlet']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses Hapus Outlet');location.href='outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus Outlet');location.href='outlet.php';</script>";
        }
    }
?>