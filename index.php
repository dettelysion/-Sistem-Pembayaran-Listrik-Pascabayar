<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN ELECTRY</title>
  <link rel="stylesheet" href="style.css?v=5">
</head>

<body>
  <?php include 'navhome.php'; ?>
  <div class="main-content">
    <div class="login-card">
      <img width="120px" src="img/user2.png" alt="">
      <h2 style="color:#003366; margin-bottom:18px;">LOGIN ELECTRY</h2>
      <form action="proses-login.php" method="post">
        <input type="text" name="Username" placeholder="Username" required><br>
        <input type="password" name="Password" placeholder="Password" required><br>
        <input type="submit" value="Login">
        <input type="reset" value="Hapus">
      </form>
      <p style="margin-top:14px;">Belum punya akun? <a href="registrasi.php">Daftar</a></p>
    </div>
  </div>
  <script>
  // Tombol toggle
  const toggleButton = document.getElementById('togglesidebar');
  const sidebar = document.getElementById('sidebar');

  toggleButton.addEventListener('click', function () {
    sidebar.classList.toggle('hidden'); // class 'hidden' harus punya definisi di CSS
  });
</script>

</body>

</html>