<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking | tambah kamar</title>
</head>
<body>
    <h3>Tambah Data Kamar</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Tipe Kamar</td>
                <td>
                <select name="tipe" required>
                    <option value="">Pilih Tipe</option>
                    <option value="single room">Single Room</option>
                    <option value="double room">Double Room</option>
                    <option value="deluxe room">Deluxe Room</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Status Pemesanan</td>
                <td>
                <select name="status" required>
                    <option value="">Pilih Status</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="sudah dipesan">sudah dipesan</option>
                </select>
                </td>
            </tr>
        </table>
        <button type="sumbit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>