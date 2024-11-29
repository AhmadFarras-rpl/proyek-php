<?php
    //menghubungkan file config dengan idex
    include("../koneksi.php");
    session_start();//mulai sesi
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking | Tamu</title>
        <style>
            table, th , td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
            <li><a href="\hotel_booking\kamar\index.php">Kamar</a></li>
            <li><a href=\hotel_booking\tamu\index.php">Tamu</a></li>

            <h2>Data tamu</h2>
        <?php if (isset($_SESSION['notifikasi'])): ?>
            <p><?php echo $_SESSION['notifikasi']; ?></p>
         <?php unset($_SESSION['notifikasi']); ?>
         <?php endif; ?>
    <table>
        <thead>
            <tr text-align=:"center;">
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Kontak</th>
                <th><a href="tambah_tamu.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            $query = $db->query("SELECT * FROM tamu");
            while ($hotel = $query->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hotel['nama']; ?></td>
                <td><?php echo $hotel['email']; ?></td>
                <td><?php echo $hotel['kontak']; ?></td>
                <td text-align="center">
                    <a href="edit_tamu.php?tamu_id=<?php echo $hotel['tamu_id'] ?>">Edit</a>
                    <a onclick=" return confirm('anda yakin ingin menghapus data?')"
                    href="hapus_tamu.php?tamu_id=<?php echo $hotel['tamu_id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>