<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'kode_pembayaran',
        'jenis_pembayaran'
    ];
    public static function kode()
    {
        $kode = DB::table('pembayaran')->max('kode_pembayaran');
        $addNol = '';
        $kode = str_replace("JP", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "00";
        } elseif (strlen($kode) == 2) {
            $addNol = "0";
        } elseif (strlen($kode == 3)) {
            $addNol = "";
        }

        $kodeBaru = "JP" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
