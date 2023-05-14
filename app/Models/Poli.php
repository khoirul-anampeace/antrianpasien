<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'poli';
    protected $fillable = [
        'kode_poli',
        'nama_poli'
    ];

    public static function kode()
    {
        $kode = DB::table('poli')->max('kode_poli');
        $addNol = '';
        $kode = str_replace("P", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "000";
        } elseif (strlen($kode) == 2) {
            $addNol = "00";
        } elseif (strlen($kode == 3)) {
            $addNol = "0";
        }

        $kodeBaru = "P" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
