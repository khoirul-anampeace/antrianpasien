<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dokter::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'failed');
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
            $request->validate([
                'kode_dokter' => 'required|max:6|string',
                'nama_dokter' => 'required|string|max:100'
            ]);

            $dokter = Dokter::create([
                'kode_dokter' => $request->kode_dokter,
                'nama_dokter' => $request->nama_dokter
            ]);

            $data = Dokter::where('id', '=', $dokter->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return  ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return  ApiFormatter::createApi(400, 'Failed');
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
        $data = Dokter::where('id', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return  ApiFormatter::createApi(400, 'Failed');
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
                'nama_dokter' => 'required|string|max:100'
            ]);

            $dokter = Dokter::findOrFail($id);
            // $poli = Poli::where('id_poli', '=', $id)->firstOrFail();

            // $poli = Poli::find($id);
            $dokter->update([
                'nama_dokter' => $request->nama_dokter
            ]);


            $data = Dokter::where('id', '=', $dokter->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return  ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return  ApiFormatter::createApi(400, 'Failed');
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
            $dokter = Dokter::findOrFail($id);
            // echo $poli;
            $data  = $dokter->delete();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success');
            } else {
                return  ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return  ApiFormatter::createApi(400, 'Failed');
        }
    }
}
