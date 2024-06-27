<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;
    protected $table = "perbaikan";

    protected $primaryKey = "id";
    protected $fillable = [
        'no_permintaan',
        'pic_permintaan',
        'departemen',
        'tanggal_permintaan',
        'deskripsi_permintaan'
    ];
}