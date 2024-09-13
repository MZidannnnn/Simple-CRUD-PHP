<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM tes WHERE id = '$id'";
mysqli_query($db, $query);

if (mysqli_affected_rows($db) > 0) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'index.php';        
    </script>";
} else {
    echo "Data Gagal Dihapus<br>";
    echo mysqli_error($db);
}


