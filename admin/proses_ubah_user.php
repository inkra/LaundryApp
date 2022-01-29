<?php 
    include 'koneksi.php';
    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $username = $_POST['username'];
    $password=md5($_POST['password']);
    $id_outlet = $_POST['id_outlet'];
    $role = $_POST['role'];

    $sql = "
        update user set id_user = '" . $id_user . "', nama_user = '" . $nama_user . "', username = '" . $username . "', password = '" . $password . "', id_outlet = '" . $id_outlet . "', role = '" . $role . "'
        where id_user = '" . $id_user . "';
    ";

    $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('Success edit user');location.href='user.php';</script>";
        }else{
            echo "<script>alert('Failed edit user');location.href='user.php';</script>";
            // printf('Failed sign up: ' . mysqli_error($conn));
        }
?>