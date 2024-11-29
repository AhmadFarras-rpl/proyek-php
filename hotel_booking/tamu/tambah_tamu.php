<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking | tambah tamu</title>
</head>
<body>
    <h3>Tambah Data Tamu</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="text" name="kontak"></td>
            </tr>
        </table>
        <button type="sumbit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>