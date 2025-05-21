<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Data Tugas</title> <!-- Judul halaman -->
</head>

<body>

    <h3>Data Tugas</h3> <!-- Judul utama halaman -->

    <!-- Tombol/link untuk menambahkan tugas baru -->
    <a href="<?= base_url('/tugas/tambah') ?>">+ Tambah Data Tugas</a>
    <br /><br />

    <!-- Mengecek apakah ada data tugas yang dikirim dari controller -->
    <?php if (!empty($tugas) && is_array($tugas)) : ?>
        <!-- Jika ada, tampilkan dalam bentuk tabel -->
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>User ID</th>
                    <th>Aksi</th> <!-- Kolom aksi untuk Edit dan Hapus -->
                </tr>
            </thead>
            <tbody>
                <!-- Perulangan untuk menampilkan semua data tugas -->
                <?php foreach ($tugas as $tgs): ?>
                    <tr>
                        <td><?= esc($tgs['id']) ?></td>
                        <td><?= esc($tgs['judul']) ?></td>
                        <td><?= esc($tgs['deskripsi']) ?></td>
                        <td><?= esc($tgs['deadline']) ?></td>
                        <td><?= esc($tgs['status']) ?></td>
                        <td><?= esc($tgs['user_id']) ?></td>
                        <td>
                            <!-- Tombol edit akan membawa ke halaman edit -->
                            <a href="<?= base_url('/tugas/edit/' . $tgs['id']) ?>">Edit</a> |
                            <!-- Tombol hapus dengan konfirmasi sebelum menghapus -->
                            <a href="<?= base_url('/tugas/hapus/' . $tgs['id']) ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <!-- Jika tidak ada data tugas, tampilkan pesan -->
        <p>Tidak ada data tugas.</p>
    <?php endif; ?>

</body>

</html>