<?php

namespace App\Http\Controllers;

use App\Models\Denah;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedungbaru = Denah::Where('gedung_id','=','1')->get();
        $gedunglama = Denah::Where('gedung_id','=','2')->get();
        $gedungbiotek = Denah::Where('gedung_id','=','3')->get();
        $gedungsiskom = Denah::Where('gedung_id','=','4')->get();
        return view ('user/index', compact('gedungbaru','gedunglama','gedungbiotek','gedungsiskom') );
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
     * @param  \App\Models\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function show(Denah $denah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function edit(Denah $denah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denah $denah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Denah $denah)
    {
        //
    }
}
