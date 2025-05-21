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
                <label for="stak"> tinggi badan :  </label> <br>
                <input type="number" name="tinggi_badan" require>
            </div>
            <div class="Stok">
                <label for="stak"> Berat badan :  </label> <br>
                <input type="number" name="berat_badan" require>
            </div>

            <div class="submit">
                <button type="submit"> submit </button>
            </div>
        </form>
    </body>
</html>