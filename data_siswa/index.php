<?php
    //menghubungkan file config dengan idex
    include("config.php");
    session_start();//mulai sesi
?>
<DOCTYPE html>
<html>
    <head>
        <title>Data Siswa | SMK Negeri 4 Tangjungpinang</title>
        <style>
            /*membuat styling pada table */
            table, th , td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
            <h2>Data Siswa</h2>
        <!--tampilkan nontifikasi jika ada -->
        <?php if (isset($_SESSION['nontifikasi'])): ?>
            <p><?php echo $_SESSION['nontifikasi']; ?></p>
        <!-- hapus nontifikasi setelah ditampilkan-->
         <?php unset($_SESSION['nontifikasi']); ?>
         <?php endif; ?>
         <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>L/P</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal lahir</th>
                    <th>Alamat</th>
                    <th><a href="form-tambah.php">Tambah Data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no =1; // membuat penomoran data dari 1
                    //membuat variable untuk menjalankan query SQL
                    $query = $db->query("SELECT * FROM tb_siswa ");
                    /* perulangan while akan teru berjalan (menampilkan data) selama kondisi $query bernilai true (adanya data pada table tb_siswa) */
                    while ($siswa = $query->fetch_assoc()){
                        /*funsi fetch_assoc digunakan untuk mengambil data perulangan dalam bentuk arry */
                    ?><!-- kode php ditutup untuk menyisipkan kode html yang akan di looping menggunakan while loop-->
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $siswa['nis'] ?></td>
                        <td><?php echo $siswa['namaLengkap'] ?></td>
                        <td><?php echo $siswa['jenis_kelamin'] ?></td>
                        <td><?php echo $siswa['tempat_lahir'] ?></td>
                        <td><?php echo $siswa['tanggal_lahir'] ?></td>
                        <td><?php echo $siswa['alamat'] ?></td>
                        <td align="center">
                    <!-- URL ke halaman edit data dengan menggunakan parameter id pada kolom table-->
                            <a href="form-edit.php?id=<?php echo $siswa['id']?>">edit</a>
                    <!--Url untuk menghapus data dengan menggunakan parameter id pada kolom table dan alert confirmasi hapus data-->
                            <a onclick="return confirm('anda yakin ingin menghapus data?')" href="hapus.php?id=<?php echo $siswa['id'] ?>">hapus</a>
                        </td>
                    </tr>
                        <?php
                    }   /* mengakhiri proses perulangan while yang dimulai pada baris 48 */
                    ?>
            </tbody>
         </table>
         <!--menghitung jumlah baris yang ada pada table (calon_iswa)-->
         <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </body>
</html>