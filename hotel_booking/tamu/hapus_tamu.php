<?php
    session_start(); //mulai sesi
    include("../koneksi.php");
    
    if (isset($_GET['tamu_id'])) {
        $id = $_GET['tamu_id'];

        $sql = "DELETE FROM tamu WHERE tamu_id=$id";
        $query = mysqli_query($db, $sql);

        //simpan pesan nontifikasi dalam sesi berdasarkan hasil query
        if ($query) {
            $_SESSION['notikasi'] = "data tamu berhasil dihapus";
        } else {
            $_SESSION['notikasi'] = "data tamu gagal dihapus";
        }

        //alihkan ke halaman index.php
        header('location: index.php');
    }else {
        //jika akses langsung tanpa ID, tampilkan pesan error
        die("akses ditolak....");
    }
?>