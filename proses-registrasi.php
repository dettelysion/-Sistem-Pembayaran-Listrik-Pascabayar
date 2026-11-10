<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>location.href='registrasi.php';</script>";
    exit;
}

$NamaLengkap = trim($_POST['NamaLengkap'] ?? '');
$Username    = trim($_POST['Username'] ?? '');
$Password    = $_POST['Password'] ?? '';
$Konfirmasi  = $_POST['KonfirmasiPassword'] ?? '';

if ($NamaLengkap === '' || $Username === '' || $Password === '') {
    echo "<script>alert('Semua data wajib diisi');location.href='registrasi.php';</script>";
    exit;
}

if ($Password !== $Konfirmasi) {
    echo "<script>alert('Konfirmasi password tidak sama');location.href='registrasi.php';</script>";
    exit;
}

// Cek username sudah dipakai atau belum
$cek = mysqli_prepare($konek, "SELECT KodeLogin FROM tblogin WHERE Username = ?");
mysqli_stmt_bind_param($cek, "s", $Username);
mysqli_stmt_execute($cek);
mysqli_stmt_store_result($cek);
if (mysqli_stmt_num_rows($cek) > 0) {
    echo "<script>alert('Username sudah dipakai, pilih yang lain');location.href='registrasi.php';</script>";
    exit;
}
mysqli_stmt_close($cek);

// Level selalu Pelanggan (tidak diambil dari form)
$Level = 'Pelanggan';
$simpan = mysqli_prepare($konek, "INSERT INTO tblogin (Username, Password, NamaLengkap, Level) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($simpan, "ssss", $Username, $Password, $NamaLengkap, $Level);

if (mysqli_stmt_execute($simpan)) {
    echo "<script>alert('Registrasi berhasil, silakan login');location.href='index.php';</script>";
} else {
    echo "<script>alert('Registrasi GAGAL: " . addslashes(mysqli_error($konek)) . "');location.href='registrasi.php';</script>";
}
