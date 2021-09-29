<?php

include "koneksi.php";


if(isset($_POST['update']))
{
    $id_artikel = $_POST['id_artikel'];
    $headline = $_POST['headline'];
    $namapenulis = $_POST['namapenulis'];
    $tanggal =date('Y-m-d',strtotime($_POST['tanggal']));

    
    $result = mysqli_query($db, "UPDATE dt_artikel SET headline='$headline',namapenulis='$namapenulis',tanggal='$tanggal' WHERE id_artikel=$id_artikel");

    
    header("Location: ListArtikel.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($db, "SELECT * FROM dt_artikel WHERE id=$id");

while($user_data = mysqli_fetch_assoc($result)) {
    $headline = $_POST['headline'];
    $namapenulis = $_POST['namapenulis'];
    $tanggal =date('Y-m-d',strtotime($_POST['tanggal']));
}
?>
<html>
<head>
    <title>Edit Data Artikel</title>
</head>

<body>
    <form name="update_artikel" method="post" action="editartikel.php">
        <table border="0">
            <tr>
                <td>Headline</td>
                <td><input type="text" name="headline" value=<?php echo $headline;?>></td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="namapenulis" value=<?php echo $namapenulis;?>></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>