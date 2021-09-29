<?php
session_start();
include "koneksidua.php";

$username=$_POST['username'];
$password=md5($_POST['password']);
$query = mysqli_query($db, "SELECT * FROM admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek){
    $_SESSION['username']=$username;
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center><h1>Anda berhasil Login. Silahkan menuju</h1></center>
    <br>
    <center><a href="index1.html"><b><font size="15Px">Group 1</font></b></a></center>
    
<?php
    } 
    else{
        ?>
        <br /><br /><br /><br />
        <center>Anda gagal login. Silahkan <a href="login.html">LOGIN KEMBALI</a></center>
        <?php
        echo mysqli_error($db);
    }
    ?>