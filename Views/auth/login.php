<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <h2>Login</h2>

    <!-- Menampilkan pesan error jika login gagal -->
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <!-- Form login -->
    <form action="<?= base_url('/login') ?>" method="post">
        <?= csrf_field() ?> <!-- Proteksi CSRF -->

        <!-- Input username -->
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <!-- Input password -->
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <!-- Tombol submit -->
        <input type="submit" value="Login">
    </form>

    <!-- Link ke halaman registrasi -->
    <p>Belum punya akun? <a href="<?= base_url('/register') ?>">Daftar di sini</a></p>

</body>

</html>