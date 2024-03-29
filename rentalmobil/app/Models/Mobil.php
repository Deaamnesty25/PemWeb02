<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = "mobils";

    protected $fillable = [
        'nama_mobil', 'cc', 'merk_id', 
        'tahun_mobil', 'warna', 'tipe_mobil_id',
        'foto', 'nomor_polisi'
    ];
}
