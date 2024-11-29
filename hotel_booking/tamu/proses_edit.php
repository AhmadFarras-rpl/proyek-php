<?php
    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])) {

    $id = $_POST['tamu_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE tamu SET
        nama='$nama',
        email='$email',
        kontak='$kontak'
        WHERE tamu_id=$id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "data kamar berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "data kamar gagal ditambahkan";
    }
        header('location: index.php');

    } else {
        die("akses ditolak");
    }
?>