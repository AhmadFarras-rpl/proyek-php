<?php
    session_start(); //mulai sesi
    include("config.php");

    //periksa apakah ada ID yang dikirim melalui URL
    if (isset($_GET['id'])) {
        //ambil ID dari URL
        $id = $_GET['id'];

        //buat query untuk menghapus data siswa berdasarkan ID
        $sql = "DELETE FROM tb_siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);

        //simpan pesan nontifikasi dalam sesi berdasarkan hasil query
        if ($query) {
            $_SESSION['nontikasi'] = "data siswa berhasil dihapus";
        } else {
            $_SESSION['nontikasi'] = "data siswa gagal dihapus";
        }

        //alihkan ke halaman index.php
        header('location: index.php');
    }else {
        //jika akses langsung tanpa ID, tampilkan pesan error
        die("akses ditolak....");
    }
?>