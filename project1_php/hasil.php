<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hasil Registrasi</title>
</head>
<body>
  <?php
  
  $nama = $_POST['nama'] ?? '';
  $email = $_POST['email'] ?? '';
  $prodi = $_POST['prodi'] ?? '';

  
  function e($s) {
      return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }
  ?>

  <h2>Data yang Dikirim</h2>
  <p><b>Nama:</b> <?= e($nama); ?></p>
  <p><b>Email:</b> <?= e($email); ?></p>
  <p><b>Program Studi:</b> <?= e($prodi); ?></p>

  <p><a href="index.php">Kembali ke Form</a></p>
</body>
</html>
