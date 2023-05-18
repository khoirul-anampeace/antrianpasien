<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class ApiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembayaran::all();

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
                'kode_pembayaran' => 'required|max:6|string',
                'jenis_pembayaran' => 'required|string|max:100'
            ]);

            $pembayaran = Pembayaran::create([
                'kode_pembayaran' => $request->kode_pembayaran,
                'jenis_pembayaran' => $request->jenis_pembayaran
            ]);

            $data = Pembayaran::where('id', '=', $pembayaran->id)->get();

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
        $data = Pembayaran::where('id', '=', $id)->get();

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
                'jenis_pembayaran' => 'required|string|max:100'
            ]);

            $pembayaran = Pembayaran::findOrFail($id);
            // $poli = Poli::where('id_poli', '=', $id)->firstOrFail();

            // $poli = Poli::find($id);
            $pembayaran->update([
                'jenis_pembayaran' => $request->jenis_pembayaran
            ]);


            $data = Pembayaran::where('id', '=', $pembayaran->id)->get();

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
            $pembayaran = Pembayaran::findOrFail($id);
            // echo $poli;
            $data  = $pembayaran->delete();

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
