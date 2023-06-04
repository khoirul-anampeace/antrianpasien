<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $countdata = DB::table('book')
            ->leftjoin('poli', 'poli.kode_poli', '=', 'book.kode_poli')
            ->leftjoin('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
            ->leftjoin('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
            ->leftjoin('pasien', 'pasien.nik', '=', 'book.nik')
            ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
            ->where('book.status', '=', 'Dipanggil')
            ->count();

        if ($countdata > 0) {
            $data = DB::table('book')
                ->leftjoin('poli', 'poli.kode_poli', '=', 'book.kode_poli')
                ->leftjoin('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
                ->leftjoin('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
                ->leftjoin('pasien', 'pasien.nik', '=', 'book.nik')
                ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
                ->where('book.status', '=', 'Dipanggil')
                ->first();
        } else {
            $data = DB::table('book')
                ->leftjoin('poli', 'poli.kode_poli', '=', 'book.kode_poli')
                ->leftjoin('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
                ->leftjoin('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
                ->leftjoin('pasien', 'pasien.nik', '=', 'book.nik')
                ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
                ->where('book.status', '=', 'test')
                ->first();
        }
        return view('page.dashboardantrian')->with(['data' => $data]);
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
        //
    }
}
