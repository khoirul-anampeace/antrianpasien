<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class BookController extends Controller
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
                'kode_registrasi' => 'required',
                'no_antrian' => 'required',
                'nik' => 'required',
                'kode_poli' => 'required',
                'kode_dokter' => 'required',
                'kode_pembayaran' => 'required',
                'tanggal_booking' => 'required'
            ]);

            $book = Book::create([
                'kode_registrasi' => $request->kode_registrasi,
                'no_antrian' => $request->no_antrian,
                'nik' => $request->nik,
                'kode_poli' => $request->kode_poli,
                'kode_dokter' => $request->kode_dokter,
                'kode_pembayaran' => $request->kode_pembayaran,
                'tanggal_booking' => $request->tanggal_booking
            ]);

            $data = Book::where('id', '=', $book->id)->get();

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
        $data = Book::where('id', '=', $id)->get();

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
            $book = Book::findOrFail($id);
            // echo $poli;
            $data  = $book->delete();

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
