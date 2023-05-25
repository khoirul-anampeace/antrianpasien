<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dokter = DB::table('dokter')
        //     // ->join('poli', 'poli.kode_poli', '=', 'dokter.kode_poli')
        //     ->select(DB::raw('COUNT(kode_dokter) AS jumlah'))
        //     // ->where('')
        //     ->get();
        $jumlahdokter = DB::table('dokter')->count();
        $jumlahpasien = DB::table('pasien')->count();
        $jumlahbookhariini = DB::table('book')
            ->whereDate('created_at', Carbon::today())->count();
        $jumlahbookpermimggu = DB::table('book')
            ->whereBetween(
                'created_at',
                [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
            )->count();
        $jumlahbook = DB::table('book')->count();
        return view('page.dashboard')->with(['jumlahdokter' => $jumlahdokter, 'jumlahpasien' => $jumlahpasien, 'jumlahbookhariini' => $jumlahbookhariini, 'jumlahbookperminggu' => $jumlahbookpermimggu, 'jumlahbook' => $jumlahbook]);
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
