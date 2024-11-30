<?php
    session_start(); //mulai sesi
    //menghubungkan file ini dengan file konfigurasi database
    include("config.php");

    //mengecek apakah tombol 'simpan' telah ditekan
    if(isset($_POST['simpan'])){
        // mengambil nilai dari form input dan menyimpannya ke dalam variable
        $nis = $_POST['nis'];
        $namaLengkap = $_POST['namaLengkap'];
        $jk = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];

        //menyusun qurry sql untuk menambahkan data ke tabel 'tb_siswa'
        $sql = "INSERT INTO tb_siswa
            (nis, namaLengkap, jenis_kelamin, 
            tempat_lahir, tanggal_lahir, alamat) 
            VALUES ('$nis','$namaLengkap','$jk',
            '$tempat_lahir','$tanggal_lahir','$alamat')";

        //menjalankan query dan menyimpan hasilnya dalam variabel $query
        $query = mysqli_query($db, $sql);

        //simpan pesan di sesi
        if ($query) {
            $_SESSION['nontifikasi'] = "data siswa berhasil ditemukan!";
        } else {
            $_SESSION['nontifikasi'] = "data siswa gagal ditambahkan";
        }
        //alihkan ke halaman index.php
        header('location: index.php');
    }else {
        //jika akses langsung tanpa form, tampilakan pesan error
        die("akses ditolak");
    }
?>