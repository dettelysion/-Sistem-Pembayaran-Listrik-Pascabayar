<?php if(isset($_SESSION['Admin'])){ ?>

 
  <!-- Sidebar Navigasi -->
  <div class="nav">
  <div class="menu">
     <!-- Tombol buka/tutup sidebar -->
  <button id="togglesidebar" style="position: fixed; top: 20px; left: 20px; z-index: 999; padding: 8px 12px;">☰</button>

    <br>
    <a href="/web_pembayaran_listrik/home.php">
      <img src="/img/logo2.png" alt="">
    </a>
    <br>
    
    <ul>
      <li><a href="/web_pembayaran_listrik/petugas/index.php">Input Petugas</a></li>
      <li><a href="/web_pembayaran_listrik/tarif/index.php">Input Tarif</a></li>
      <li><a href="/web_pembayaran_listrik/pelanggan/index.php">Input Pelanggan</a></li>
      <li><a href="/web_pembayaran_listrik/tagihan/index.php">Input Tagihan</a></li>
      <li><a href="/web_pembayaran_listrik/pembayaran/index.php">Input Pembayaran</a></li>
      <li><a href="/web_pembayaran_listrik/logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<div class="nav2">
  <div class="penamaan">
    <p style="font-family:'arial';">Nama Lengkap :
      <?= $_SESSION['NamaLengkap']; ?>
    </p>
  </div>
  <div class="level">
    <p style="font-family:'arial';">Level : Admin</p>
  </div>
</div>
<?php
}
elseif(isset($_SESSION['Petugas']))
{
?>
<div class="nav">
  <div class="menu">
    <br>
    <a href="../home.php">
      <img src="../img/logo.png" alt="">
    </a>
    <br>
    <ul>
      <li><a href="../tarif/index.php">Input Tarif</a></li>
      <li><a href="../pelanggan/index.php">Input Pelanggan</a></li>
      <li><a href="../tagihan/index.php">Input Tagihan</a></li>
      <li><a href="../pembayaran/index.php">Input Pembayaran</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<div class="nav2">
  <div class="penamaan">
    <p>Nama Lengkap :
      <?= $_SESSION['NamaLengkap']; ?>
    </p>
  </div>
  <div class="level">
    <p>Level : Petugas</p>
  </div>
</div>
<?php    
}
else
{
?>
<div class="nav">
  <div class="menu">
    <br>
    <a href="../home.php">
      <img src="../img/logo.png" alt="">
    </a>
    <br>
    <ul>
      <li><a href="../tagihan/index.php">Input Tagihan</a></li>
      <li><a href="../pembayaran/index.php">Input Pembayaran</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<div class="nav2">
  <div class="penamaan">
    <p>Nama Lengkap :
      <?= $_SESSION['NamaLengkap']; ?>
    </p>
  </div>
  <div class="level">
    <p>Level : Pelanggan</p>
  </div>
</div>
<?php
}
?>

<nav class="navbar">
  <img src="img/logo2.png" alt="Logo Listrik">
  <span style="font-size:1.5em;font-weight:bold;letter-spacing:1px;">Pembayaran Listrik</span>
  <!-- menu lainnya -->
</nav>