<?php
session_start();
    require 'koneksi.php';
    $sql = "SELECT * FROM data_bayi";



require "bayi.model.php";
$bayimodel = new  bayiModel($koneksi);
$rows = $bayimodel->getAll();

    require 'Views/bayi.admin.view.php';

?>