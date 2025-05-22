<?php
session_start();
require "koneksi.php";

require "bayi.model.php";

$bayimodel = new bayiModel($koneksi);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $bayimodel->hapusAdmin($id);
}
?>