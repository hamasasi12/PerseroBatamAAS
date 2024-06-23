<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahDataHardware extends Model
{
    use HasFactory;
    protected $table = "tambah_data_hardware";

    protected $primaryKey = "id";
    protected $fillable = [
        'no_inventaris',
        'tahun',
        'jenis',
        'merek',
        'proc',
        'ram',
        'hdd',
        'ip',
        'user',
        'unit',
        'lokasi',
        'status',
        'windows',
        'office',
        'garansi'
    ];
}
