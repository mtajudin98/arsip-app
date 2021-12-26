<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','user_id','kode_klasifikasi','unit_id','tanggal','kode_user','detail_id','created_at','updated_at'
    ];
}
