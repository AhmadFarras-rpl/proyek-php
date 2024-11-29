<?php
    include("../koneksi.php");

    $id = $_GET['tamu_id'];

    $query = $db->query("SELECT * FROM tamu WHERE tamu_id = '$id' ");
    $hotel = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking | edit tamu</title>
</head>
<body>
    <h3>Edit Kamar</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="tamu_id" value="<?php echo $hotel['tamu_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $hotel['nama'];?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $hotel['email']; ?>" required></td>

            </tr>
            <td>Kontak</td>
            <td><input type="kontak" name="kontak" value="<?php echo $hotel['kontak']; ?>" required></td>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>