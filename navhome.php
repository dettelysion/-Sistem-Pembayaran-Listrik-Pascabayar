<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$base = '/web_pembayaran_listrik/';

$namaLengkap = $_SESSION['NamaLengkap'] ?? '-';
?>


<!-- Sidebar Navigasi -->
<div class="nav" id="sidebar">
  <div class="menu">
    <!-- Tombol buka/tutup sidebar -->
<button id="togglesidebar" style="position: fixed; top: 20px; left: 20px; z-index: 999; padding: 8px 12px;">☰</button>

    <br>
    <a href="<?= $base ?>home.php">
      <img src="<?= $base ?>img/logoL.png" alt="Logo" style="width:80px;">
    </a>
    <br>

    <ul>
      <?php if (isset($_SESSION['Admin'])): ?>
        <li><a href="<?= $base ?>petugas/index.php">Input Petugas</a></li>
        <li><a href="<?= $base ?>petugas/tampil-petugas.php">Data Petugas</a></li>
        <li><a href="<?= $base ?>tarif/index.php">Input Tarif</a></li>
        <li><a href="<?= $base ?>pelanggan/index.php">Input Pelanggan</a></li>
        <li><a href="<?= $base ?>pelanggan/tampil-pelanggan.php">Data Pelanggan</a></li>
        <li><a href="<?= $base ?>tagihan/index.php">Input Tagihan</a></li>
        <li><a href="<?= $base ?>pembayaran/index.php">Input Pembayaran</a></li>
        <li><a href="<?= $base ?>logout.php">Logout</a></li>

      <?php elseif (isset($_SESSION['Petugas'])): ?>
        <li><a href="<?= $base ?>tarif/index.php">Input Tarif</a></li>
        <li><a href="<?= $base ?>pelanggan/index.php">Input Pelanggan</a></li>
        <li><a href="<?= $base ?>pelanggan/tampil-pelanggan.php">Data Pelanggan</a></li>
        <li><a href="<?= $base ?>tagihan/index.php">Input Tagihan</a></li>
        <li><a href="<?= $base ?>pembayaran/index.php">Input Pembayaran</a></li>
        <li><a href="<?= $base ?>logout.php">Logout</a></li>

      <?php else: ?>
        <li><a href="<?= $base ?>tagihan/index.php">Input Tagihan</a></li>
        <li><a href="<?= $base ?>pembayaran/index.php">Input Pembayaran</a></li>
        <li><a href="<?= $base ?>logout.php">Logout</a></li>
      <?php endif; ?>
    </ul>
  </div>
</div>

<!-- Informasi Pengguna -->
<div class="nav2">
  <div class="penamaan">
    <p>Nama Lengkap: <?= htmlspecialchars($namaLengkap) ?></p>
  </div>
  <div class="level">
    <p>Level: <?= isset($_SESSION['Admin']) ? 'Admin' : (isset($_SESSION['Petugas']) ? 'Petugas' : 'Pelanggan') ?></p>
  </div>
</div>
