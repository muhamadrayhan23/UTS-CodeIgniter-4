<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'users';

    // Menentukan primary key tabel
    protected $primaryKey = 'id';

    // Mengaktifkan auto-increment untuk primary key
    protected $useAutoIncrement = true;

    // Format data yang dikembalikan, di sini dalam bentuk array
    protected $returnType = 'array';

    // Tidak menggunakan soft delete (data akan benar-benar dihapus dari database)
    protected $useSoftDeletes = false;

    // Melindungi field agar hanya field yang diizinkan (allowedFields) yang dapat diisi
    protected $protectFields = true;

    // Daftar field yang boleh diisi ketika insert atau update data
    protected $allowedFields = ['password', 'username'];

    // Pengaturan tambahan
    protected bool $allowEmptyInserts = false; // Tidak mengizinkan penyimpanan data kosong
    protected bool $updateOnlyChanged = true;  // Hanya field yang berubah yang akan di-update

    // Konversi otomatis (tidak digunakan saat ini, bisa untuk casting tipe data)
    protected array $casts = [];
    protected array $castHandlers = [];

    // Pengaturan tanggal (jika menggunakan created_at dan updated_at)
    protected $useTimestamps = false; // Tidak menggunakan timestamp otomatis
    protected $dateFormat = 'datetime'; // Format tanggal
    protected $createdField = 'created_at'; // Field untuk waktu dibuat
    protected $updatedField = 'updated_at'; // Field untuk waktu update
    protected $deletedField = 'deleted_at'; // Field untuk soft delete (tidak digunakan)

    // Validasi input data (opsional, bisa ditambahkan jika ingin validasi langsung di model)
    protected $validationRules = [];        // Aturan validasi input
    protected $validationMessages = [];     // Pesan error kustom untuk validasi
    protected $skipValidation = false;      // Tidak melewati validasi
    protected $cleanValidationRules = true; // Membersihkan aturan kosong sebelum validasi

    // Callback lifecycle (opsional digunakan untuk trigger sebelum/sesudah operasi database)
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
