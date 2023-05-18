<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class ApiPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pasien::all();

        if ($data) {
            return ApiFormatter::createApi(200, true, $data);
        } else {
            return  ApiFormatter::createApi(400, false);
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
                'nik' => 'required|min:16|max:16',
                'nama_pasien' => 'required',
                'tanggal_lahir' => 'required|date',
                'no_kontak' => 'required|string'
            ]);

            $pasien = Pasien::create([
                'nik' => $request->nik,
                'nama_pasien' => $request->nama_pasien,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_kontak' => $request->no_kontak
            ]);

            $data = Pasien::where('id', '=', $pasien->id)->get();

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pasien::where('id', '=', $id)->get();

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
                'nama_pasien' => 'required',
                'tanggal_lahir' => 'required|date',
                'no_kontak' => 'required|string'
            ]);

            $pasien = Pasien::findOrFail($id);
            // $poli = Poli::where('id_poli', '=', $id)->firstOrFail();

            // $poli = Poli::find($id);
            $pasien->update([
                'nama_pasien' => $request->nama_pasien,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_kontak' => $request->no_kontak
            ]);


            $data = Pasien::where('id', '=', $pasien->id)->get();

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
            $pasien = Pasien::findOrFail($id);
            // echo $poli;
            $data  = $pasien->delete();

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
