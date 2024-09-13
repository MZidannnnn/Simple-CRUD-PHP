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
    <form action="prosestambah.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama"> <br> <br>
        <label for="pendidikan">pendidikan</label>
        <input type="text" id="pendidikan" name="pendidikan"> <br> <br>
        <label for="hobby">hobby</label>
        <input type="text" id="hobby" name="hobby"> <br> <br>
        <input type="submit" value="Simpan">
    </form>
   
</body>

</html>