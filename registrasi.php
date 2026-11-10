<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Pembayaran Listrik</title>
  <link rel="stylesheet" href="style.css?v=5">
</head>

<body>
  <?php include 'navhome.php'; ?>
  <div class="main-content">
    <div class="login-card">
      <img width="120px" src="img/user2.png" alt="">
      <h2 style="color:#003366; margin-bottom:18px;">Registrasi Akun</h2>
      <form action="proses-registrasi.php" method="post">
        <input type="text" name="NamaLengkap" placeholder="Nama Lengkap" maxlength="80" required><br>
        <input type="text" name="Username" placeholder="Username" maxlength="50" required><br>
        <input type="password" name="Password" placeholder="Password" maxlength="50" required><br>
        <input type="password" name="KonfirmasiPassword" placeholder="Konfirmasi Password" maxlength="50" required><br>
        <input type="submit" value="Daftar">
        <input type="reset" value="Hapus">
      </form>
      <p style="margin-top:14px;">Sudah punya akun? <a href="index.php">Login</a></p>
    </div>
  </div>
  <script>
  const toggleButton = document.getElementById('togglesidebar');
  const sidebar = document.getElementById('sidebar');
  toggleButton.addEventListener('click', function () {
    sidebar.classList.toggle('hidden');
  });
  </script>
</body>

</html>
