<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>Tambah Artikel</title>
</head>

<body>
    <a href="ListArtikel.php">Kembali ke Artikel's List</a>
    <br/><br/>

    <div class="container">
      <div class="row my-5">
        <div class="col mb-3 text-center">
          <h2 >Silahkan isi artikel yang di tulis</h2>
        </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <form action="tambahartikel.php" method="POST" name="form1">
                <div class="mb-4">
                  <label for="title" class="form-label">Headline</label>
                  <input type="text" class="form-control" id="headline" name="headline" />
                </div>
                <div class="mb-4">
                  <label for="name" class="form-label">Nama Penulis</label>
                  <input type="text" class="form-control" id="namapenulis" name="namapenulis" />
                </div>
                <div class="mb-4">
                  <label for="date" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" />
                </div>
                <button type="submit" class="btn btn-primary mb-3" name="Submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    if(isset($_POST['Submit'])) {
        
        $headline = $_POST['headline'];
        $namapenulis = $_POST['namapenulis'];
        $tanggal =date('Y-m-d',strtotime($_POST['tanggal']));

        include "koneksi.php";


        $result = mysqli_query($db, "INSERT INTO dt_artikel(headline,namapenulis,tanggal) VALUES('$headline','$namapenulis','$tanggal')");


        echo "<center>User added successfully. <a href='ListArtikel.php'>Lihat Artikel</center></a>";
    }
    ?>
</body>
</html>