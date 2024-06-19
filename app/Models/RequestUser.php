<?php

// app/Models/RequestUser.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
