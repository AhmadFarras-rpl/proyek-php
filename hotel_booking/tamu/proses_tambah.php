<?php
    session_start();
    include("../koneksi.php");

    if(isset($_POST['simpan'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO tamu (nama, email, kontak) 
        VALUES ('$nama', '$email', '$kontak')";


    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "data tamu berhasil ditemukan!";
    } else {
        $_SESSION['notifikasi'] = "data tamu gagal ditambahkan";
    }
        header('location: index.php');

    } else {
        die("akses ditolak");
    }
?>