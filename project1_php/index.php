<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Registrasi Mahasiswa</title>
</head>
<body>
  <h2>Form Registrasi Mahasiswa</h2>
  
  <form action="hasil.php" method="post">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Program Studi:</label><br>
    <select name="prodi" required>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknologi Informasi">Teknologi Informasi</option>
      <option value="Manajemen">Manajemen</option>
      <option value="Kehutanan">Kehutanan</option>
      <option value="Statistika">Statistika</option>
      <option value="Aktuaria">Aktuaria</option>
      <option value="Matematika">Matematika</option>
    </select><br><br>

    <button type="submit">Kirim</button>
  </form>
</body>
</html>
