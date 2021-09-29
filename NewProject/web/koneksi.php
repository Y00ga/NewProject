<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$nama_database ="contact";

$db = mysqli_connect($SERVER, $USER, $PASSWORD, $nama_database) or die (mysqli_error($db));
?>