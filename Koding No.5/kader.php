<?php
session_start();
    require 'koneksi.php';
    $sql = "SELECT * FROM data_kader";



require "kader.model.php";
$kadermodel = new  kaderModel($koneksi);
$rows = $kadermodel->getAll();

    require 'Views/kader.view.php';

?>