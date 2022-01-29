<?php 
    include 'koneksi.php';

    $id_outlet = $_POST['id_outlet'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    $sql = "
        update outlet set id_outlet = '" . $id_outlet . "', nama = '" . $nama . "', alamat = '" . $alamat . "', tlp = '" . $tlp . "'
        where id_outlet = '" . $id_outlet . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit outlet');location.href='outlet.php';</script>";
        }else{
            echo "<script>alert('Failed edit outlet');location.href='outlet.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>