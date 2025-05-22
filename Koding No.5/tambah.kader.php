<?php
    // var_dump($_POST);
    require "koneksi.php";

    if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
        $Nama = htmlspecialchars($_POST["Nama"]);
        $kelamin = $_POST["jenis_kelamin"];
        $umur = $_POST["umur"];
        $id_anggota = $_POST["id_anggota"];

        $sql = "INSERT INTO data_kader(Nama, Jenis_kelamin, Umur, id_anggota) values (?, ?, ?, ?)";
        // 
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssii", $Nama, $kelamin, $umur, $id_anggota);
        $stmt->execute();


        header("Location:kader.php");
    }


?>







<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <h2> inputkan data untuk menambah Data profile member </h2>
        <form class="container" action="" method="post">
            <div class="Nama">
                <label for="Barang"> Nama : </label> <br>
                <input type="text" name="Nama" require>
            </div>
             <div class="status">
                <label for="status"> jenis kelamin : </label> <br>
                <select name="jenis_kelamin" id="Status" require>
                    <option value="laki">laki</option>
                    <option value="perempuan">perempuan</option>
                </select> 
            </div>
            <div class="Roles">
                <label for="stak"> umur :  </label> <br>
                <input type="number" name="umur" require>
            </div>
            <div class="Stok">
                <label for="stak"> id anggota :  </label> <br>
                <input type="number" name="id_anggota" require>
            </div>

            <div class="submit">
                <button type="submit"> submit </button>
            </div>
        </form>
    </body>
</html>