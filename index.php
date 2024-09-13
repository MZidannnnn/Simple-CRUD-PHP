<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- table untuk menampilkan data -->
    <a href="tambahdata.php">Tambah data</a>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>Hobby</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            $data = mysqli_query($db, "SELECT * FROM tes");
            while ($d = mysqli_fetch_assoc($data)) {
            ?>
                <tr>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['pendidikan']; ?></td>
                    <td><?php echo $d['hobby']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                        <a href="hapusp.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin mau menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>