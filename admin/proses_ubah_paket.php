<?php 
    include 'koneksi.php';
    $id_paket = $_POST['id_paket'];
    $id_outlet = $_POST['id_outlet'];
    $jenis = $_POST['jenis'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];

    $sql = "
        update paket set id_paket = '" . $id_paket . "', id_outlet = '" . $id_outlet . "', jenis = '" . $jenis . "', nama_paket = '" . $nama_paket . "', harga = '" . $harga . "'
        where id_paket = '" . $id_paket . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit paket');location.href='paket.php';</script>";
        }else{
            echo "<script>alert('Failed edit paket');location.href='paket.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>