<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "SELECT * from user_admin WHERE username=? and password=?";
    $row = $koneksi-> execute_query($sql, [$username, $password])-> fetch_assoc();

    if ($row){
        session_start();
        $_SESSION["username"] = $row["username"];
        header("Location:dashboard.admin.php");

    
    
    }
}
require 'Views/Admin.login.view.php';
?>