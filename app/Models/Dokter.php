<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable = [
        'kode_dokter',
        'nama_dokter',
        'kode_poli'
    ];

    public static function kode()
    {
        $kode = DB::table('dokter')->max('kode_dokter');
        $addNol = '';
        $kode = str_replace("D", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "000";
        } elseif (strlen($kode) == 2) {
            $addNol = "00";
        } elseif (strlen($kode == 3)) {
            $addNol = "0";
        }

        $kodeBaru = "D" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
