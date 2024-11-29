<?php
    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])) {

    $id = $_POST['kamar_id'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $sql = "UPDATE kamar SET
        tipe='$tipe',
        harga='$harga',
        status='$status'
        WHERE kamar_id=$id";

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