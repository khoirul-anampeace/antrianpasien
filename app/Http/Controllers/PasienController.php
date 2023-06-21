<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pasien::all();
        return view('page.pasien')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }


    public function detail($id)
    {
        $pasien = Pasien::findOrFail($id);
        $data = DB::table('book')
            ->join('poli', 'poli.kode_poli', '=', 'book.kode_poli')
            ->join('dokter', 'dokter.kode_dokter', '=', 'book.kode_dokter')
            ->join('pembayaran', 'pembayaran.kode_pembayaran', '=', 'book.kode_pembayaran')
            ->join('pasien', 'pasien.nik', '=', 'book.nik')
            ->select('book.*', 'poli.nama_poli', 'dokter.nama_dokter', 'pembayaran.jenis_pembayaran', 'pasien.nama_pasien')
            ->where('book.nik', '=', $pasien->nik)
            // ->where(function ($data) use ($filter) {
            //     $data->where('tanggal_booking', '=', $filter['q']);
            // })
            ->get();
        return view('page.detailpasien')->with(['pasien' => $pasien, 'data' => $data]);
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
