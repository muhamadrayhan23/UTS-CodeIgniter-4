<?php

namespace App\Controllers;

use App\Models\TugasModel;

class Tugas extends BaseController
{
    /**
     * Menampilkan seluruh data tugas.
     */
    public function index()
    {
        $model = new TugasModel();
        $data['tugas'] = $model->findAll(); // Ambil semua data dari tabel 'tugas'
        return view('tugas/index', $data); // Tampilkan ke view
    }

    /**
     * Menampilkan form tambah tugas dan menyimpan data baru.
     */
    public function tambah()
    {
        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            $model = new \App\Models\TugasModel();

            // Ambil data dari input form
            $data = [
                'judul'     => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'deadline'  => $this->request->getPost('deadline'),
                'status'    => $this->request->getPost('status'),
                'user_id'   => 1, // Karena tidak menggunakan login, isi user_id default 1
            ];

            // Simpan data ke database
            if ($model->insert($data)) {
                return redirect()->to('/tugas')->with('success', 'Tugas berhasil ditambahkan.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal menambahkan tugas.');
            }
        }

        // Jika tidak disubmit, tampilkan form tambah
        return view('tugas/tambah');
    }

    /**
     * Menampilkan form edit tugas dan menyimpan perubahan data.
     *
     * @param int $id ID dari tugas yang akan diedit
     */
    public function edit($id)
    {
        $model = new TugasModel();

        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            $data = [
                'judul'     => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'deadline'  => $this->request->getPost('deadline'),
                'status'    => $this->request->getPost('status'),
            ];

            // Update data tugas berdasarkan ID
            if ($model->update($id, $data)) {
                return redirect()->to('/tugas')->with('success', 'Data berhasil diperbarui');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data');
            }
        }

        // Ambil data berdasarkan ID
        $data['tugas'] = $model->find($id);
        if (!$data['tugas']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data dengan ID $id tidak ditemukan");
        }

        return view('tugas/edit', $data);
    }

    /**
     * Menghapus data tugas berdasarkan ID.
     *
     * @param int $id ID dari tugas yang akan dihapus
     */
    public function hapus($id)
    {
        $model = new TugasModel();
        $model->delete($id); // Hapus data
        return redirect()->to('/tugas')->with('success', 'Data berhasil dihapus');
    }
}
