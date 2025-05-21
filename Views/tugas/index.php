<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Data Tugas</title>
    <!-- Link Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Tugas</h3>
        <a href="<?= base_url('/tugas/tambah') ?>" class="btn btn-primary">+ Tambah Data Tugas</a>
    </div>

    <!-- Mengecek apakah ada data tugas -->
    <?php if (!empty($tugas) && is_array($tugas)) : ?>
        <!-- Tabel Data responsif dengan Bootstrap -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>User ID</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tugas as $tgs): ?>
                        <tr>
                            <td><?= esc($tgs['id']) ?></td>
                            <td><?= esc($tgs['judul']) ?></td>
                            <td><?= esc($tgs['deskripsi']) ?></td>
                            <td><?= esc($tgs['deadline']) ?></td>
                            <td><?= esc($tgs['status']) ?></td>
                            <td><?= esc($tgs['user_id']) ?></td>
                            <td>
                                <a href="<?= base_url('/tugas/edit/' . $tgs['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= base_url('/tugas/hapus/' . $tgs['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info">Tidak ada data tugas.</div>
    <?php endif; ?>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
