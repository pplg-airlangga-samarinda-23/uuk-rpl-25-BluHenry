<?php
require 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM data_bayi WHERE id = $id";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();

require "bayi.model.php";
$bayimodel = new bayiModel($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nama = htmlspecialchars($_POST["Nama"]);
    $kelamin = $_POST["jenis_kelamin"];
    $tinggi = $_POST["tinggi_badan"];
    $berat = $_POST["berat_badan"];
    $bayimodel->edit($id, $Nama, $kelamin, $tinggi, $berat);
}

require "Views/edit.view.php";
?>

