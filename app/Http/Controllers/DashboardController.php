<?php

namespace App\Http\Controllers;

use App\Models\Denah;
use App\Models\Gedung;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalgbr = Denah::Where('gedung_id','=','1')->count();
        $totalglm = Denah::Where('gedung_id','=','2')->count();
        $totalbio = Denah::Where('gedung_id','=','3')->count();
        $totalsis = Denah::Where('gedung_id','=','4')->count();
        $denah = Denah::all();
        $gedung = Gedung::all();
        // dd($gedung);
        return view ('admin/index', compact('denah','gedung','totalgbr','totalglm','totalsis','totalbio') );
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
