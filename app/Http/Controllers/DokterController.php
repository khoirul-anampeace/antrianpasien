<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Dokter::all();
        $data = DB::table('dokter')
            ->join('poli', 'poli.kode_poli', '=', 'dokter.kode_poli')
            ->select('dokter.*', 'poli.kode_poli', 'poli.nama_poli')
            ->get();
        return view('page.dokter')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapoli = Poli::all();
        $kode = Dokter::kode();
        return view('page.createdokter')->with(['datapoli' => $datapoli, 'kode' => $kode]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        Dokter::insert($data);

        return redirect('/dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datapoli = Poli::all();
        $data = Dokter::findOrFail($id);
        $data = DB::table('dokter')
            ->join('poli', 'poli.kode_poli', '=', 'dokter.kode_poli')
            ->select('dokter.*', 'poli.kode_poli', 'poli.nama_poli')
            ->where('dokter.id', '=', $id)
            ->get();
        return view('page.showdokter')->with(['data' => $data, 'datapoli' => $datapoli]);
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
        $item = Dokter::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dokter::findOrFail($id);
        $item->delete();
        return redirect('/dokter');
    }
}
