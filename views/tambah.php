<?php
include_once "../controllers/PasienController.php";
$controller = new PasienController();

if (isset($_POST['simpan'])) {
    $controller->model->create(
        $_POST['nama'],
        $_POST['alamat'],
        $_POST['penyakit'],
        $_POST['dokter']
    );
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pasien</title>
    <style>
        body  { font-family: Arial, sans-serif; margin: 30px; background: #f4f4f4; }
        h2    { color: #2c7be5; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input { padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px; }
        button { margin-top: 16px; padding: 9px 20px; background: #28a745;
                 color: white; border: none; border-radius: 4px; cursor: pointer; }
        a.back { display: inline-block; margin-top: 10px; color: #2c7be5; }
    </style>
</head>
<body>
    <h2>🏥 Tambah Data Pasien</h2>
    <form method="POST">
        <label>Nama Pasien</label>
        <input type="text" name="nama" required>

        <label>Alamat</label>
        <input type="text" name="alamat" required>

        <label>Penyakit</label>
        <input type="text" name="penyakit" required>

        <label>Dokter Penanggun</label>
        <input type="text" name="dokter" required>

        <br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <a class="back" href="../index.php">← Kembali</a>
</body>
</html>
