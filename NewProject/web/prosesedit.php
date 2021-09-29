<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $headline = $_POST['headline'];
    $namapenulis = $_POST['namapenulis'];
    $tanggal =date('Y-m-d',strtotime($_POST['tanggal']));
    $sql = "UPDATE dt_artikel SET headline='$headline',namapenulis='$namapenulis',tanggal='$tanggal' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: ListArtikel.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>