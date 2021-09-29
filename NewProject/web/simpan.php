<?php
include("koneksi.php");

$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan = $_POST['pesan'];

$sql="insert into data(nama,email,pesan) values ('$nama','$email','$pesan')";

mysqli_query($db,$sql) or die (mysqli_error());
header('location:index.html');
?>