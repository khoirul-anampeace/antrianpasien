<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Poli;
use Exception;
use Illuminate\Http\Request;

class ApiPoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Poli::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return  ApiFormatter::createApi(400, 'Failed');
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
                'kode_poli' => 'required|max:6|string',
                'nama_poli' => 'required|max:100|string'
            ]);

            $poli = Poli::create([
                'kode_poli' => $request->kode_poli,
                'nama_poli' => $request->nama_poli
            ]);

            $data = Poli::where('id', '=', $poli->id)->get();

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
        $data = Poli::where('id', '=', $id)->get();

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
                'nama_poli' => 'required|max:100|string'
            ]);

            $poli = Poli::findOrFail($id);
            // $poli = Poli::where('id_poli', '=', $id)->firstOrFail();

            // $poli = Poli::find($id);
            $poli->update([
                'nama_poli' => $request->nama_poli
            ]);


            $data = Poli::where('id', '=', $poli->id)->get();

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
            $poli = Poli::findOrFail($id);
            // echo $poli;
            $data  = $poli->delete();

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
