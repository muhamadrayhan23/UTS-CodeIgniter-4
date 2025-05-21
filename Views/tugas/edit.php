<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Edit Tugas</title> <!-- Judul tab halaman browser -->
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">

    <div class="mb-4">
        <h3>Edit Tugas</h3> <!-- Judul halaman -->
        <!-- Link untuk kembali ke halaman daftar tugas -->
        <a href="<?= base_url('/tugas') ?>" class="btn btn-secondary">Kembali</a>
    </div>

    <!-- Form untuk mengirim data perubahan tugas -->
    <form action="<?= base_url('/tugas/edit/' . $tugas['id']) ?>" method="post" class="card p-4 shadow-sm">
        <?= csrf_field() ?> <!-- Proteksi CSRF untuk keamanan -->

        <!-- Hidden input untuk menyimpan ID tugas -->
        <input type="hidden" name="id" value="<?= esc($tugas['id']) ?>">

        <!-- Input untuk judul tugas -->
        <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" id="judul" name="judul" value="<?= esc($tugas['judul']) ?>" class="form-control" required>
        </div>

        <!-- Input untuk deskripsi tugas -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <input type="text" id="deskripsi" name="deskripsi" value="<?= esc($tugas['deskripsi']) ?>" class="form-control" required>
        </div>

        <!-- Input untuk tanggal deadline -->
        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline:</label>
            <input type="date" id="deadline" name="deadline" value="<?= esc($tugas['deadline']) ?>" class="form-control" required>
        </div>

        <!-- Dropdown untuk memilih status tugas -->
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select id="status" name="status" class="form-select" required>
                <option value="belum" <?= $tugas['status'] == 'belum' ? 'selected' : '' ?>>belum</option>
                <option value="proses" <?= $tugas['status'] == 'proses' ? 'selected' : '' ?>>proses</option>
                <option value="selesai" <?= $tugas['status'] == 'selesai' ? 'selected' : '' ?>>selesai</option>
            </select>
        </div>

        <!-- Tombol untuk menyimpan perubahan -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>