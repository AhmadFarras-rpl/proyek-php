<?php
    include("../koneksi.php");

    $id = $_GET['kamar_id'];

    $query = $db->query("SELECT * FROM kamar WHERE kamar_id = '$id' ");
    $hotel = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking | edit kamar</title>
</head>
<body>
    <h3>Edit Kamar</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="kamar_id" value="<?php echo $hotel['kamar_id']; ?>">
        <table border="0">
            <tr>
                <td>Tipe Kamar</td>
                <td>
                <select name="tipe" required>
                <option value="" disabled>Pilih Salah Satu</option>
                        <option value="single room" <?php echo ($hotel['tipe'] == 'single room') ? 'selected' : ''; ?>>Single room</option>
                        <option value="double room" <?php echo ($hotel['tipe'] == 'double room') ? 'selected' : ''; ?>>Double room</option>
                        <option value="deluxe room" <?php echo ($hotel['tipe'] == 'deluxe room') ? 'selected' : ''; ?>>Deluxe room</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $hotel['harga']; ?>" required></td>

            </tr>
            <td>Status Pemesanan</td>
                <td>
                    <select name="status" style="width: 100%">
                    <option value="" disabled>Pilih Salah Satu</option>
                        <option value="tersedia" <?php echo ($hotel['status'] == 'tersedia') ? 'selected' : ''; ?>>Tersedia</option>
                        <option value="sudah dipesan" <?php echo ($hotel['status'] == 'sudah dipesan') ? 'selected' : ''; ?>>Sudah Dipesan</option>
                    </select>
                </td>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>