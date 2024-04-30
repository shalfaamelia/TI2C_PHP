<?php 
include("koneksi.php"); 
 
// Mengecek apakah tombol submit sudah diklik atau belum? 
if(isset($_POST['daftar'])){ 
    // Mengambil data dari formulir biodata
    $nim = $_POST['NIM'];
    $nama = $_POST['Nama']; 
    $alamat = $_POST['Alamat'];
    $ttl = $_POST['TTL'];
    $jk = $_POST['Jenis_Kelamin'];  
    $usia = $_POST['Usia'];
 
    // Membuat query
    $sql = "INSERT INTO siswa (NIM, Nama, Alamat, TTL, Jenis_Kelamin, Usia) VALUE ('$nim', '$nama', '$alamat', '$ttl', '$jk', '$usia')"; 
        $query = mysqli_query($db, $sql); 
        // Menyatakan apakah query simpan berhasil? 
        if( $query ) { 
            // Jika berhasil akan dialihkan ke halaman index.php dengan status=sukses 
            header('Location: index.php?status=sukses'); 
        } else { 
            // Jika gagal akan dialihkan ke halaman index.php dengan status=gagal 
            header('Location: index.php?status=gagal'); 
        } 
    }     
?>