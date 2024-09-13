<?php
     include 'koneksi.php';
     $id = $_GET['id'];
     
     $query = "SELECT * FROM tes WHERE id = '$id';";
     mysqli_query($db, $query);
     $result = mysqli_query($db, $query);
     $data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form untuk tambah data -->
    <a href="index.php">kembali ke halaman awal</a>
    <form action="editp.php" method="post">
        <input type="text" id="id" name="id" value="<?= $data['id']; ?>" hidden> <br> <br>
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama" value="<?= $data['nama']; ?>"> <br> <br>
        <label for="pendidikan">pendidikan</label>
        <input type="text" id="pendidikan" name="pendidikan" value="<?= $data['pendidikan']; ?>"> <br> <br>
        <label for="hobby">hobby</label>
        <input type="text" id="hobby" name="hobby" value="<?= $data['hobby']; ?>"> <br> <br>
        <input type="submit" value="Edit">
    </form>
   
</body>

</html>