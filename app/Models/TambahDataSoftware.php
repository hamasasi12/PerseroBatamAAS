<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahDataSoftware extends Model
{
    use HasFactory;
    protected $table = "tambah_data_software";

    protected $primaryKey = "id";
    protected $fillable = [
        'jenis_aplikasi',
        'tahun',
        'no_inventaris',
        'nama_aplikasi',
        'pengguna',
        'divisi'
    ];
}