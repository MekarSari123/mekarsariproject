<?php

namespace App\Http\Controllers;

use App\Models\Suratpengantar;
use App\Http\Requests\StoreSuratpengantarRequest;
use App\Http\Requests\UpdateSuratpengantarRequest;

class SuratpengantarController extends Controller
{

     public function suratpengantar()
    {

         return view('daftarsuratpengantar',[
        "title" => "suratpengantars",
        "suratpengantar" => suratpengantar::all()
      
    ]);}


     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suratpengantar  $suratpengantar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cetaksuratketerangan',[
        "title" => "Cetak surat keterangan",
        "surat" => Suratpengantar::find($id)

    ]);
    }


      public function show1($id)
    {
        return view('cetaksuratketeranganword',[
        "title" => "Cetak surat keterangan",
        "surat" => Suratpengantar::find($id)

    ]);
    }

    public function show2($id)
    {
        return view('cetaksuratketerangan11',[
        "title" => "Cetak surat keterangan",
        "surat" => Suratpengantar::find($id)

    ]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSuratpengantarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuratpengantarRequest $request)
    {
        //
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suratpengantar  $suratpengantar
     * @return \Illuminate\Http\Response
     */
    public function edit(Suratpengantar $suratpengantar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratpengantarRequest  $request
     * @param  \App\Models\Suratpengantar  $suratpengantar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuratpengantarRequest $request, Suratpengantar $suratpengantar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratpengantar  $suratpengantar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratpengantar $suratpengantar)
    {
        //
    }
}
