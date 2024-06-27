<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    use HasFactory;
    protected $table = "tindak_lanjut";
    protected $primaryKey = "id";
    protected $fillable = [
        'tanggal',
        'pic',
        'kode_asset',
        'keterangan',
        'status'
    ];
}
