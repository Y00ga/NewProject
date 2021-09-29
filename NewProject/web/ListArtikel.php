<?php
include "koneksi.php";

$result = mysqli_query($db, "SELECT * FROM dt_artikel ORDER BY id DESC");
?>
<html>
<head>
<style>
      body {
        background-image: url(pict/bg-picture.png);
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
      }
      th {
        
      }
  </style>
    <title>Artikel's List</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
</head>
<body>
  <div>
  <center>
    <h1>Artikel's List</h1>
  </header></center>
  <center><a href="tambahartikel.php" style="padding:0 30%;">Tambahkan Artikel</a><br/><br/></center>
    <center><table width='80%' border=1 >
    <tr>
        <th><center>Headline</center></th><th><center>Nama</center></th><th><center>Tanggal</center></th><th><center>Perintah</center></th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><center>".$user_data['headline']."</center></td>";
        echo "<td><center>".$user_data['namapenulis']."</center></td>";
        echo "<td><center>".$user_data['tanggal']."</center></td>";
        echo "<td><center><a href=editartikel.php?id=$user_data[id]'>Edit</a>&ensp;&ensp;&ensp;&ensp;<a href='deleteartikel.php?id=$user_data[id]'>Delete</a></center></td></tr>";
    }
    ?>
    </table>
    </center>
    </div>
</body>
</html>