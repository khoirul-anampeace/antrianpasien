<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = [
        'kode_admin',
        'nama_admin',
        'username',
        'password'
    ];

    public static function kode()
    {
        $kode = DB::table('admin')->max('kode_admin');
        $addNol = '';
        $kode = str_replace("A", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "000";
        } elseif (strlen($kode) == 2) {
            $addNol = "00";
        } elseif (strlen($kode == 3)) {
            $addNol = "0";
        }

        $kodeBaru = "A" . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
