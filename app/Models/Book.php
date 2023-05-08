<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = [
        'kode_registrasi',
        'no_antrian',
        'nik',
        'kode_poli',
        'kode_dokter',
        'kode_pembayaran',
        'tanggal_booking'
    ];
}
