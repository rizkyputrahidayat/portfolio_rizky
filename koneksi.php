<?php 
$koneksi = mysqli_connect("localhost", "root", "", "simpan");

// Cek Koneksi
if (mysqli_connect_errno()){
    echo "Pesan Tidak Berhasil di Kirim : " . mysqli_connect_errno();  
}
