<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$pendidikan = $_POST['pendidikan'];
$hobby = $_POST['hobby'];


$query = "UPDATE tes SET nama = '$nama', pendidikan = '$pendidikan', hobby = '$hobby' WHERE id = '$id'";

mysqli_query($db, $query);

if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Diedit');
    document.location.href = 'index.php';        
    </script>";
} else {
    echo "Data Gagal Diedit<br>";
    echo mysqli_error($db);
}


