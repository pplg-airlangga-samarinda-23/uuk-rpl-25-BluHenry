<?php
    require 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'];
        $password = md5($_POST['password']);


        $sql = "INSERT INTO user(username, password) values (?, ?)";

        $stmt = $koneksi->prepare($sql);
        $stmt -> bind_param("ss", $username, $password);
        $stmt -> execute();

        header("Location:login.php");

        
    }
    require 'Views/Register.view.php';
?>
