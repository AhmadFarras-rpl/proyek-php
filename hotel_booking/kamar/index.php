<?php
    //menghubungkan file config dengan idex
    include("../koneksi.php");
    session_start();//mulai sesi
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Booking |</title>
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
            <li><a href="\hotel_booking\tamu\index.php">Tamu</a></li>

            <h2>Data Kamar</h2>
        <?php if (isset($_SESSION['notifikasi'])): ?>
            <p><?php echo $_SESSION['notifikasi']; ?></p>
         <?php unset($_SESSION['notifikasi']); ?>
         <?php endif; ?>
    <table>
        <thead>
            <tr  style="text-align:center;">
                <th>#</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Status</th>
                <th><a href="tambah_kamar.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            $query = $db->query("SELECT * FROM kamar");
            while ($hotel = $query->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $hotel['tipe']; ?></td>
                <td><?php echo $hotel['harga']; ?></td>
                <td><?php echo $hotel['status']; ?></td>
                <td text-align="center">
                    <a href="edit_kamar.php?kamar_id=<?php echo $hotel['kamar_id'] ?>">Edit</a>
                    <a onclick=" return confirm('anda yakin ingin menghapus data?')"
                    href="hapus_kamar.php?kamar_id=<?php echo $hotel['kamar_id'] ?>">Hapus</a>
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