<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Tambah Tugas</title> <!-- Judul halaman -->
</head>

<body>

    <h3>Tambah Tugas</h3> <!-- Heading utama halaman -->

    <!-- Link untuk kembali ke halaman daftar tugas -->
    <a href="<?= base_url('/tugas') ?>">Kembali</a>
    <br /><br />

    <!-- Form untuk mengirim data tugas baru ke controller -->
    <form action="<?= base_url('/tugas/tambah') ?>" method="POST">
        <?= csrf_field() ?> <!-- Proteksi CSRF dari CodeIgniter -->

        <!-- Input untuk judul tugas -->
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required><br><br>

        <!-- Input untuk deskripsi tugas -->
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" required><br><br>

        <!-- Input tanggal deadline -->
        <label for="deadline">Deadline:</label>
        <input type="date" id="deadline" name="deadline" required><br><br>

        <!-- Dropdown untuk memilih status tugas -->
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="belum">Belum</option> <!-- Pilihan status "belum" -->
            <option value="proses">Proses</option> <!-- Pilihan status "proses" -->
            <option value="selesai">Selesai</option> <!-- Pilihan status "selesai" -->
        </select><br><br>

        <!-- Tombol submit untuk menyimpan data tugas -->
        <input type="submit" value="Simpan">
    </form>

</body>

</html>