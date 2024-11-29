<?php
    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])) {

    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $sql = "INSERT INTO kamar (tipe, harga, status) 
        VALUES ('$tipe', '$harga', '$status')";


    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "data kamar berhasil ditemukan!";
    } else {
        $_SESSION['notifikasi'] = "data kamar gagal ditambahkan";
    }
        header('location: index.php');

    } else {
        die("akses ditolak");
    }
?>