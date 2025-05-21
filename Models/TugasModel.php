<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'tugas';

    // Primary key dari tabel
    protected $primaryKey = 'id';

    // Mengaktifkan auto increment untuk primary key
    protected $useAutoIncrement = true;

    // Jenis data yang dikembalikan (array atau object)
    protected $returnType = 'array';

    // Tidak menggunakan soft delete
    protected $useSoftDeletes = false;

    // Mengaktifkan proteksi terhadap field yang tidak diperbolehkan
    protected $protectFields = true;

    // Field yang diperbolehkan untuk insert dan update
    protected $allowedFields = ['judul', 'deskripsi', 'deadline', 'status', 'user_id'];

    // Konfigurasi tambahan
    protected bool $allowEmptyInserts = false; // Tidak mengizinkan insert kosong
    protected bool $updateOnlyChanged = true;  // Hanya update field yang berubah

    // Casts untuk mengkonversi nilai field secara otomatis (tidak digunakan di sini)
    protected array $casts = [];
    protected array $castHandlers = [];

    // Konfigurasi timestamps (jika menggunakan created_at, updated_at)
    protected $useTimestamps = false; // Tidak menggunakan timestamp otomatis
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validasi input data
    protected $validationRules = [];        // Tambahkan aturan validasi jika diperlukan
    protected $validationMessages = [];     // Pesan kustom untuk validasi
    protected $skipValidation = false;      // Tidak melewatkan proses validasi
    protected $cleanValidationRules = true; // Hapus aturan kosong sebelum validasi

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
