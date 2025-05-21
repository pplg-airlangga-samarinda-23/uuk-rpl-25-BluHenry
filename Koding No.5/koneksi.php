<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "posyandu";

$koneksi = new mysqli($hostname, $username, $password, $database);

if ($koneksi -> connect_error){
    echo "Tulah internet cepat buat apa??";
}

?>