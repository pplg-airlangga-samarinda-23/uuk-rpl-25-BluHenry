<?php
session_start();
require "koneksi.php";

require "kader.model.php";

$kadermodel = new kaderModel($koneksi);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $kadermodel->hapus($id);
}
?>