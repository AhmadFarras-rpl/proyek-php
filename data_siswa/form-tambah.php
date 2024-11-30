<!DOCTYPE html>
<html>
    <head>
        <title>Data siswa | SMK Negeri 4 Tanjungpinang</title>
    </head>
    <body>
        <h3>Tanbah Data Siswa</h3>
        <form action="proses-tambah.php" method="POST">
            <table border="0">
                <tr>
                    <td>NIS</td>
                    <td><Input taype="text" name="nis" require></Input></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><Input taype="text" name="namaLengkap" require></Input></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin" style="width: 100%" require>
                            <option value="" selected disabled>pilih salah satu</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" style="width: 100%"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
            </table>
            <button type="submit" name="simpan">simpan</button>
        </form>
    </body>
</html>