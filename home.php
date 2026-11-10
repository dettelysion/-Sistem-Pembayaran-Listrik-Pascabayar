<?php
session_start();
include 'koneksi.php';
// Pastikan semua variabel jumlah data terdefinisi
$tarif = function_exists('hitungBarisTarif') ? hitungBarisTarif() : 0;
$petugas = function_exists('hitungBarisPetugas') ? hitungBarisPetugas() : 0;
$pelanggan = function_exists('hitungBarisPelanggan') ? hitungBarisPelanggan() : 0;
$tagihan = function_exists('hitungBaristagihan') ? hitungBaristagihan() : 0;
$pembayaran = function_exists('hitungBarispembayaran') ? hitungBarispembayaran() : 0;
if(isset($_SESSION['Admin']))
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Halaman Pembayaran Listrik Pasca Bayar</title>
		<link rel="stylesheet" href="style.css?v=5">
	</head>
	<body>
		<?php include 'navhome.php'; ?>
		<div class="main-content" style="display:flex;justify-content:center;align-items:center;min-height:80vh;">
			<div class="container-detail" style="max-width:700px;margin:40px auto 0 auto;padding:32px 32px 32px 32px;background:rgba(255,255,255,0.97);border-radius:18px;box-shadow:0 2px 16px rgba(0,0,0,0.08);">
				<h2 style="margin-bottom:18px;text-align:center;font-size:2em;color:#0a3977;letter-spacing:1px;">Halaman Pembayaran Listrik<br>Pasca Bayar</h2>
				<hr style="margin: 0 0 28px 0;">
				<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 24px; margin-bottom: 24px;">
					<div style="text-align:center;">
						<a href="petugas/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Petugas</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Petugas : <?= $petugas ?></div>
					</div>
					<div style="text-align:center;">
						<a href="tarif/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Tarif</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Tarif : <?= $tarif ?></div>
					</div>
					<div style="text-align:center;">
						<a href="pelanggan/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Pelanggan</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Pelanggan : <?= $pelanggan ?></div>
					</div>
					<div style="text-align:center;">
						<a href="tagihan/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Tagihan</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Tagihan : <?= $tagihan ?></div>
					</div>
					<div style="text-align:center;">
						<a href="pembayaran/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Pembayaran</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml Data Pembayaran : <?= $pembayaran ?></div>
					</div>
					<div style="text-align:center;">
						<a href="logout.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;background:#c00; color:#fff;">Logout</a>
					</div>
				</div>
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
<?php
}
elseif(isset($_SESSION['Petugas']))
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Halaman Pembayaran Listrik Pasca Bayar</title>
		<link rel="stylesheet" href="style.css?v=5">
	</head>
	<body>
		<?php include 'navhome.php'; ?>
		<div class="main-content" style="display:flex;justify-content:center;align-items:center;min-height:80vh;">
			<div class="container-detail" style="max-width:700px;margin:40px auto 0 auto;padding:32px 32px 32px 32px;background:rgba(255,255,255,0.97);border-radius:18px;box-shadow:0 2px 16px rgba(0,0,0,0.08);">
				<h2 style="margin-bottom:18px;text-align:center;font-size:2em;color:#0a3977;letter-spacing:1px;">Halaman Pembayaran Listrik<br>Pasca Bayar</h2>
				<hr style="margin: 0 0 28px 0;">
				<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 24px; margin-bottom: 24px;">
					<div style="text-align:center;">
						<a href="tarif/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Tarif</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Tarif : <?= $tarif ?></div>
					</div>
					<div style="text-align:center;">
						<a href="pelanggan/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Pelanggan</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Pelanggan : <?= $pelanggan ?></div>
					</div>
					<div style="text-align:center;">
						<a href="tagihan/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Tagihan</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Tagihan : <?= $tagihan ?></div>
					</div>
					<div style="text-align:center;">
						<a href="pembayaran/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Pembayaran</a>
						<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml Data Pembayaran : <?= $pembayaran ?></div>
					</div>
					<div style="text-align:center;">
						<a href="logout.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;background:#c00; color:#fff;">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<script>
  // Tombol toggle
  const toggleButton = document.getElementById('togglesidebar');
  const sidebar = document.getElementById('sidebar');
  const showBtn = document.getElementById('showSidebar');

   // Sembunyikan sidebar
  hideBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';
    showBtn.style.display = 'block';
  });

  // Tampilkan sidebar
  showBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
    showBtn.style.display = 'none';
  });
</script>

	</body>
</html>
	<?php
			}
			elseif(isset($_SESSION['Pelanggan']))
			{
	?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Halaman Pembayaran Listrik Pasca Bayar</title>
			<link rel="stylesheet" href="style.css?v=5">
		</head>
		<body>
			<?php include 'navhome.php'; ?>
			<div class="main-content" style="display:flex;justify-content:center;align-items:center;min-height:80vh;">
				<div class="container-detail" style="max-width:700px;margin:40px auto 0 auto;padding:32px 32px 32px 32px;background:rgba(255,255,255,0.97);border-radius:18px;box-shadow:0 2px 16px rgba(0,0,0,0.08);">
					<h2 style="margin-bottom:18px;text-align:center;font-size:2em;color:#0a3977;letter-spacing:1px;">Halaman Pembayaran Listrik<br>Pasca Bayar</h2>
					<hr style="margin: 0 0 28px 0;">
					<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 24px; margin-bottom: 24px;">
						<div style="text-align:center;">
							<a href="tagihan/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Tagihan</a>
							<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml. Data Tagihan : <?= $tagihan ?></div>
						</div>
						<div style="text-align:center;">
							<a href="pembayaran/index.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;">Input Pembayaran</a>
							<div style="font-size:0.98em; margin-top:6px; color:#333;">Jml Data Pembayaran : <?= $pembayaran ?></div>
						</div>
						<div style="text-align:center;">
							<a href="logout.php" class="btn" style="min-width:160px;padding:12px 0;font-size:1.08em;background:#c00; color:#fff;">Logout</a>
						</div>
					</div>
				</div>
			</div>
			<script>
  // Sidebar toggle
  function togglesidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.style.transform = sidebar.style.transform === "translateX(-100%)" ? "translateX(0)" : "translateX(-100%)";
  }

  // Dark Mode Toggle
  const toggle = document.getElementById('darkModeToggle');
  const body = document.body;

  // Load preference
  if (localStorage.getItem("darkMode") === "true") {
    body.classList.add("dark-mode");
    toggle.checked = true;
  }

  toggle.addEventListener('change', () => {
    body.classList.toggle("dark-mode");
    localStorage.setItem("darkMode", body.classList.contains("dark-mode"));
  });
</script>

		</body>
	</html>
	<?php
	}
	else
	{
	echo"<script>
	alert('Anda Tidak Boleh Masuk');
	location.href='index.php';
	</script>";
	}
	?>