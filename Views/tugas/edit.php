<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Edit Tugas</title> <!-- Judul tab halaman browser -->
</head>

<body>

    <h3>Edit Tugas</h3> <!-- Judul halaman -->

    <!-- Link untuk kembali ke halaman daftar tugas -->
    <a href="<?= base_url('/tugas') ?>">Kembali</a>
    <br><br>

    <!-- Form untuk mengirim data perubahan tugas -->
    <form action="<?= base_url('/tugas/edit/' . $tugas['id']) ?>" method="post">
        <?= csrf_field() ?> <!-- Proteksi CSRF untuk keamanan -->

        <!-- Hidden input untuk menyimpan ID tugas -->
        <input type="hidden" name="id" value="<?= esc($tugas['id']) ?>">

        <!-- Input untuk judul tugas -->
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="<?= esc($tugas['judul']) ?>" required><br><br>

        <!-- Input untuk deskripsi tugas -->
        <label for="deskripsi">Deskripsi:</label><br>
        <input type="text" id="deskripsi" name="deskripsi" value="<?= esc($tugas['deskripsi']) ?>" required><br><br>

        <!-- Input untuk tanggal deadline -->
        <label for="deadline">Deadline:</label><br>
        <input type="date" id="deadline" name="deadline" value="<?= esc($tugas['deadline']) ?>" required><br><br>

        <!-- Dropdown untuk memilih status tugas -->
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <!-- Set pilihan 'selected' sesuai dengan status yang sedang aktif -->
            <option value="belum" <?= $tugas['status'] == 'belum' ? 'selected' : '' ?>>Belum</option>
            <option value="proses" <?= $tugas['status'] == 'proses' ? 'selected' : '' ?>>Proses</option>
            <option value="selesai" <?= $tugas['status'] == 'selesai' ? 'selected' : '' ?>>Selesai</option>
        </select><br><br>

        <!-- Tombol untuk menyimpan perubahan -->
        <input type="submit" value="Simpan Perubahan">
    </form>

</body>

</html>