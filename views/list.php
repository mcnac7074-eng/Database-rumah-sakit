<?php
include_once "controllers/PasienController.php";
$controller = new PasienController();
$data = $controller->model->getAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien - Rumah Sakit</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background: #f4f4f4; }
        h2   { color: #2c7be5; }
        table { border-collapse: collapse; width: 100%; background: white; }
        th, td { padding: 10px 14px; border: 1px solid #ccc; text-align: left; }
        th   { background: #2c7be5; color: white; }
        tr:nth-child(even) { background: #f0f6ff; }
        a.btn { padding: 5px 10px; border-radius: 4px; text-decoration: none; color: white; }
        a.tambah { background: #28a745; padding: 8px 14px; border-radius: 4px;
                   text-decoration: none; color: white; display: inline-block; margin-bottom: 14px; }
        a.edit   { background: #ffc107; }
        a.hapus  { background: #dc3545; }
    </style>
</head>
<body>
    <h2>🏥 Data Pasien Rumah Sakit</h2>
    <a class="tambah" href="views/tambah.php">+ Tambah Pasien</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Penyakit</th>
            <th>Dokter</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $data->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td><?= htmlspecialchars($row['alamat']); ?></td>
            <td><?= htmlspecialchars($row['penyakit']); ?></td>
            <td><?= htmlspecialchars($row['dokter']); ?></td>
            <td>
                <a class="btn edit" href="views/edit.php?id=<?= $row['id']; ?>">Edit</a>
                &nbsp;
                <a class="btn hapus" href="index.php?hapus=<?= $row['id']; ?>"
                   onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
