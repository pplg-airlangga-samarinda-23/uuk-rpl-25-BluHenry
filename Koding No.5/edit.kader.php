<?php
require 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM data_kader WHERE id = $id";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();

require "kader.model.php";
$kadermodel = new kaderModel($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nama = htmlspecialchars($_POST["Nama"]);
    $kelamin = $_POST["jenis_kelamin"];
    $umur = $_POST["umur"];
    $id_anggota = $_POST["id_anggota"];
    $kadermodel->edit($id, $Nama, $kelamin, $umur, $id_anggota);
}

require "Views/edit.kader.view.php";
?>

