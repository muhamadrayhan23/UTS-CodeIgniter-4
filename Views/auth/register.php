<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>

<body>

    <h2>Registrasi</h2>

    <!-- Form registrasi -->
    <form action="<?= base_url('/register') ?>" method="post">
        <?= csrf_field() ?> <!-- Proteksi CSRF -->

        <!-- Input username -->
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <!-- Input password -->
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <!-- Tombol submit -->
        <input type="submit" value="Daftar">
    </form>

    <!-- Link kembali ke halaman login -->
    <p>Sudah punya akun? <a href="<?= base_url('/login') ?>">Login di sini</a></p>

</body>

</html>