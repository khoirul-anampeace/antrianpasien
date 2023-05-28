<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Book;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ApiBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::all();

        if ($data) {
            return ApiFormatter::createApi(200, true, $data);
        } else {
            return ApiFormatter::createApi(400, false);
        }
    }

    public function detail($nik)
    {
        $data = DB::table('book')
            ->join('poli', 'poli.kode_poli', '=', 'book.kode_poli')
            ->join('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
            ->join('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
            ->join('pasien', 'pasien.nik', '=', 'book.nik')
            ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
            ->where('book.nik', '=', $nik)
            ->first();

        if ($data) {
            return ApiFormatter::createApi(200, true, $data);
        } else {
            return ApiFormatter::createApi(400, false);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // table booking
            $request->validate([
                'nik' => 'required',
                'kode_poli' => 'required',
                'kode_dokter' => 'required',
                'kode_pembayaran' => 'required',
                'tanggal_booking' => 'required',
                'status' => 'required',
                'nama_pasien' => 'required',
                'tanggal_lahir' => 'required|date',
                'no_kontak' => 'required|string'
            ]);

            // cek ke database
            $now    = date('Y-m-d');
            $value  = DB::table('book')
                ->selectRaw('max(no_antrian) as nomor')
                ->where('tanggal_booking', $now)
                ->where('kode_poli', $request->kode_poli)
                ->first();

            $book = Book::create([
                'kode_registrasi' => date('ymdhis'),
                'no_antrian' => ($value->nomor  + 1),
                'nik' => $request->nik,
                'kode_poli' => $request->kode_poli,
                'kode_dokter' => $request->kode_dokter,
                'kode_pembayaran' => $request->kode_pembayaran,
                'tanggal_booking' => $request->tanggal_booking,
                'status' => $request->status
            ]);

            $data = Book::where('id', '=', $book->id)->first();

            // table pasien
            Pasien::create([
                'nik' => $request->nik,
                'nama_pasien' => $request->nama_pasien,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_kontak' => $request->no_kontak
            ]);

            if ($data) {
                return ApiFormatter::createApi(200, true, $data);
            } else {
                return ApiFormatter::createApi(400, false);
            }
        } catch (Exception $error) {
            return  ApiFormatter::createApi(400, false);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Book::where('id', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, true, $data);
        } else {
            return  ApiFormatter::createApi(400, false);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'kode_poli' => 'required',
                'kode_dokter' => 'required',
                'kode_pembayaran' => 'required',
                'tanggal_booking' => 'required'
            ]);

            $book = Book::findOrFail($id);
            // $poli = Poli::where('id_poli', '=', $id)->firstOrFail();

            // $poli = Poli::find($id);
            $book->update([
                'kode_poli' => $request->kode_poli,
                'kode_dokter' => $request->kode_dokter,
                'kode_pembayaran' => $request->kode_pembayaran,
                'tanggal_booking' => $request->tanggal_booking
            ]);


            $data = Book::where('id', '=', $book->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, true, $data);
            } else {
                return  ApiFormatter::createApi(400, false);
            }
        } catch (Exception $error) {
            return  ApiFormatter::createApi(400, false);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $book = Book::findOrFail($id);
            // echo $poli;
            $data  = $book->delete();

            if ($data) {
                return ApiFormatter::createApi(200, true, $data);
            } else {
                return  ApiFormatter::createApi(400, false);
            }
        } catch (Exception $error) {
            return  ApiFormatter::createApi(400, false);
        }
    }
}
