<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model ini.
     * Secara default, Laravel akan mengasumsikan nama jamak dari model ('tanamen'), 
     * tetapi kita mendefinisikannya secara eksplisit.
     *
     * @var string
     */
    protected $table = 'tanaman';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'sumber',
        // 'created_at' dan 'updated_at' ditangani otomatis oleh Model
    ];

    /**
     * Tipe data untuk atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // Contoh: Jika Anda memiliki kolom boolean, Anda bisa cast di sini
        // 'is_active' => 'boolean',
    ];
}