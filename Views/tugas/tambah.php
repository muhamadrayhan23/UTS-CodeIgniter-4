<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Tambah Tugas</title> <!-- Judul halaman -->
    <!-- Link Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">

    <div class="mb-4">
        <h3>Tambah Tugas</h3> <!-- Heading utama halaman -->
        <!-- Link untuk kembali ke halaman daftar tugas -->
        <a href="<?= base_url('/tugas') ?>" class="btn btn-secondary">Kembali</a>
    </div>

    <!-- Form untuk mengirim data tugas baru ke controller -->
    <form action="<?= base_url('/tugas/tambah') ?>" method="POST" class="card p-4 shadow-sm">
        <?= csrf_field() ?> <!-- Proteksi CSRF dari CodeIgniter -->

        <!-- Input untuk judul tugas -->
        <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" id="judul" name="judul" class="form-control" required>
        </div>

        <!-- Input untuk deskripsi tugas -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
        </div>

        <!-- Input tanggal deadline -->
        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline:</label>
            <input type="date" id="deadline" name="deadline" class="form-control" required>
        </div>

        <!-- Dropdown untuk memilih status tugas -->
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select id="status" name="status" class="form-select" required>
                <option value="belum">belum</option>
                <option value="proses">proses</option>
                <option value="selesai">selesai</option>
            </select>
        </div>

        <!-- Tombol simpan agar data tersimpan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>