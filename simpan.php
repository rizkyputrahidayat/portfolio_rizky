<?php
include 'koneksi.php';

// Menangkap data dari form
$name = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Input kedalam database
mysqli_query($koneksi, "insert into data_form values('$name','$email','$pesan')");
// Redirect ke Profil
header("location:index.html");
