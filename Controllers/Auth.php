<?php

// app/Controllers/Auth.php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    /**
     * Menangani proses login user.
     * - Menampilkan form login jika metode bukan POST.
     * - Jika POST, cek username dan password, lalu buat sesi.
     */
    public function login()
    {
        helper(['form']); // Memuat helper form

        // Jika form disubmit (metode POST)
        if ($this->request->getMethod() === 'post') {
            $model = new UserModel();

            // Cari user berdasarkan username
            $user = $model->where('username', $this->request->getPost('username'))->first();

            // Verifikasi password
            if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                // Jika valid, simpan data user ke session
                session()->set([
                    'user_id'  => $user['id'],
                    'username' => $user['username']
                ]);
                return redirect()->to('/tugas'); // Redirect ke halaman tugas
            }

            // Jika gagal login, kembali ke halaman login dengan error
            return redirect()->back()->with('error', 'Login gagal');
        }

        // Tampilkan halaman login
        return view('auth/login');
    }

    /**
     * Menangani proses registrasi user baru.
     * - Menampilkan form registrasi jika metode bukan POST.
     * - Jika POST, simpan user baru ke database.
     */
    public function register()
    {
        helper(['form']); // Memuat helper form

        // Jika form disubmit (metode POST)
        if ($this->request->getMethod() === 'post') {
            $model = new UserModel();

            // Siapkan data user baru
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Enkripsi password
            ];

            // Simpan ke database
            $model->insert($data);

            // Redirect ke halaman login
            return redirect()->to('/login');
        }

        // Tampilkan halaman registrasi
        return view('auth/register');
    }

    /**
     * Menangani proses logout user.
     * - Menghancurkan session dan redirect ke halaman login.
     */
    public function logout()
    {
        session()->destroy(); // Hapus semua data session
        return redirect()->to('/login'); // Redirect ke halaman login
    }
}
