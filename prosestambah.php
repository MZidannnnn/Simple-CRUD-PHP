<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan'];
$hobby = $_POST['hobby'];

$query = "INSERT INTO tes(nama, pendidikan, hobby) VALUES ('$nama', '$pendidikan', '$hobby')";
mysqli_query($db, $query);

if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'index.php';        
    </script>";
} else {
    echo "Data Gagal Ditambahkan<br>";
    echo mysqli_error($db);
}


