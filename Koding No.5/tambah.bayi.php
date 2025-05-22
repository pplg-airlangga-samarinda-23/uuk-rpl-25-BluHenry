<?php
    // var_dump($_POST);
    require "koneksi.php";

    if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
        $Nama = htmlspecialchars($_POST["Nama"]);
        $kelamin = $_POST["jenis_kelamin"];
        $tinggi = $_POST["tinggi_badan"];
        $berat = $_POST["berat_badan"];

        $sql = "INSERT INTO data_bayi(Nama, Jenis_kelamin, Tinggi_badan, Berat_badan) values (?, ?, ?, ?)";
        // 
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssii", $Nama, $kelamin, $tinggi, $berat);
        $stmt->execute();


        header("Location:bayi.php");
    }

    require "Views/tambah.bayi.view.php";
?>











