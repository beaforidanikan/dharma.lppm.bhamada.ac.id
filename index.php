<?php
// index.php untuk portal LPPM Dharma Bhamada
// -------------------------------------------

// Konfigurasi dasar
$title       = "LPPM Dharma Bhamada";
$description = "Lembaga Penelitian dan Pengabdian kepada Masyarakat Dharma Bhamada";

// Setting timezone
date_default_timezone_set("Asia/Jakarta");
$today = date("l, d F Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($description) ?>">
  <title><?= htmlspecialchars($title) ?></title>
  <link rel="stylesheet" href="assets/style.css"> <!-- CSS eksternal -->
</head>
<body>
  <!-- Header -->
  <header style="background:#004080; color:#fff; padding:15px;">
    <h1><?= htmlspecialchars($title) ?></h1>
    <p><?= htmlspecialchars($description) ?></p>
    <small><?= $today ?></small>
  </header>

  <!-- Navigasi -->
  <nav style="background:#eaeaea; padding:10px;">
    <a href="index.php">Beranda</a> |
    <a href="profil.php">Profil</a> |
    <a href="penelitian.php">Penelitian</a> |
    <a href="pengabdian.php">Pengabdian</a> |
    <a href="kontak.php">Kontak</a>
  </nav>

  <!-- Konten Utama -->
  <main style="padding:20px;">
    <h2>Selamat Datang di <?= htmlspecialchars($title) ?></h2>
    <p>
      Website ini merupakan portal resmi <?= htmlspecialchars($title) ?> 
      yang memuat informasi penelitian, pengabdian, publikasi ilmiah, serta kegiatan akademik lainnya.
    </p>
    <section>
      <h3>Berita Terbaru</h3>
      <ul>
        <li><a href="#">Pengumuman Hibah Penelitian Internal 2025</a></li>
        <li><a href="#">Workshop Penulisan Artikel Ilmiah</a></li>
        <li><a href="#">Kegiatan Pengabdian Masyarakat Semester Genap</a></li>
      </ul>
    </section>
  </main>

  <!-- Footer -->
  <footer style="background:#004080; color:#fff; padding:15px; margin-top:30px;">
    <p>&copy; <?= date("Y") ?> <?= htmlspecialchars($title) ?> - Semua Hak Dilindungi</p>
  </footer>
</body>
</html>
