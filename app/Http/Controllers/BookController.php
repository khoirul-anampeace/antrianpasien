<?php

namespace App\Http\Controllers;

use App\Models\Book;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');
        $now    = date('Y-m-d');
        $filter['q'] = $request->query('q');
        $data = DB::table('book')
            ->join('poli', 'poli.kode_poli', '=', 'book.kode_poli')
            ->join('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
            ->join('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
            ->join('pasien', 'pasien.nik', '=', 'book.nik')
            ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
            ->get();
        return view('page.book')->with(['data' => $data, 'q' => $filter['q'], 'tanggal' => $now]);
    }


    public function antriansekarang(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now    = date('Y-m-d');
        $filter['q'] = $request->query('q');
        $data = DB::table('book')
            ->join('poli', 'poli.kode_poli', '=', 'book.kode_poli')
            ->join('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
            ->join('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
            ->join('pasien', 'pasien.nik', '=', 'book.nik')
            ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
            ->where('tanggal_booking', '=', $now)
            ->where('status', '=', 'Menuggu konfirmasi')
            ->orWhere('status', '=', 'Dipanggil')
            // ->where(function ($data) use ($filter) {
            //     $data->where('tanggal_booking', '=', $filter['q']);
            // })
            ->get();
        return view('page.bookantriansekarang')->with(['data' => $data, 'q' => $filter['q'], 'tanggal' => $now]);
    }

    public function antrianselesai(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now    = date('Y-m-d');
        $filter['q'] = $request->query('q');
        $data = DB::table('book')
            ->join('poli', 'poli.kode_poli', '=', 'book.kode_poli')
            ->join('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
            ->join('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
            ->join('pasien', 'pasien.nik', '=', 'book.nik')
            ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
            // ->where('tanggal_booking', '=', $now)
            ->where('status', '=', 'Selesai')
            // ->where(function ($data) use ($filter) {
            //     $data->where('tanggal_booking', '=', $filter['q']);
            // })
            ->get();
        return view('page.bookantrianselesai')->with(['data' => $data, 'q' => $filter['q'], 'tanggal' => $now]);
    }

    public function panggil($id)
    {
        DB::table('book')
            ->where('id', $id)
            ->update(['status' => 'Dipanggil']);
        return redirect('/bookantriansekarang');
    }
    public function lewati($id)
    {
        DB::table('book')
            ->where('id', $id)
            ->update(['status' => 'Selesai']);
        return redirect('/bookantriansekarang');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Book::findOrFail($id);
        $item->delete();
        return redirect('/book');
    }
}
