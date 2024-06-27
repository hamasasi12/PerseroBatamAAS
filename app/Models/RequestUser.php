<?php

// app/Models/RequestUser.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RequestUser extends Model
{
    protected $table = "request_users";

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
        'upload_file'
    ];
    public function getCreatedAtFormattedAttribute()
    {
        // return Carbon::parse($this->attributes['created_at'])->format('d-m-Y H:i:s');
        return Carbon::parse($this->attributes['created_at'])->format('YmdHis');
    }
    public function getCreatedAtOriginalAttribute()
    {
        return $this->attributes['created_at']; 
    }
}
