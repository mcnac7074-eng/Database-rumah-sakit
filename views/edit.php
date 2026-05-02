<?php
include_once "../controllers/PasienController.php";
$controller = new PasienController();

$id   = (int)$_GET['id'];
$data = $controller->model->getById($id);
$row  = $data->fetch_assoc();

if (isset($_POST['update'])) {
    $controller->model->update(
        $id,
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
    <title>Edit Pasien</title>
    <style>
        body  { font-family: Arial, sans-serif; margin: 30px; background: #f4f4f4; }
        h2    { color: #2c7be5; }
        label { display: block; margin-top: 12px; font-weight: bold; }
        input { padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px; }
        button { margin-top: 16px; padding: 9px 20px; background: #2c7be5;
                 color: white; border: none; border-radius: 4px; cursor: pointer; }
        a.back { display: inline-block; margin-top: 10px; color: #2c7be5; }
    </style>
</head>
<body>
    <h2>🏥 Edit Data Pasien</h2>
    <form method="POST">
        <label>Nama Pasien</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($row['nama']); ?>" required>

        <label>Alamat</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($row['alamat']); ?>" required>

        <label>Penyakit</label>
        <input type="text" name="penyakit" value="<?= htmlspecialchars($row['penyakit']); ?>" required>

        <label>Dokter Penanggung</label>
        <input type="text" name="dokter" value="<?= htmlspecialchars($row['dokter']); ?>" required>

        <br>
        <button type="submit" name="update">Update</button>
    </form>
    <a class="back" href="../index.php">← Kembali</a>
</body>
</html>
