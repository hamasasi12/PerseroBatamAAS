<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class selesai extends Model
{
    use HasFactory;

    protected $table = "selesai";

    protected $primaryKey = "id";
    protected $fillable = [
        'nup',
        'nama',
        'divisi',
        'no_hp',
        'kategori_req',
        'deskripsi_req',
        'alasan_req',
        'upload_gambar',
        'upload_file',
        'teknisi'
    ];

    public function technician()
    {
        return $this->belongsTo(User::class, 'teknisi');
    }

    public function getCreatedAtFormattedAttribute()
    {
        // return Carbon::parse($this->attributes['created_at'])->format('d-m-Y H:i:s');
        return Carbon::parse($this->attributes['created_at'])->format('YmdHis');
    }
}
