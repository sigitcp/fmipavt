<?php

namespace App\Http\Controllers;

use App\Models\Denah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class GedungBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedungbaru = Denah::Where('gedung_id','=','1')->get();
        return view ('admin/gedungbaru', compact('gedungbaru') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|unique:denahs',
            'luas' => 'required',
            'kapasitas' => 'required',
            'denah'=> 'image|file|max:5000',
            'gedung_id' => 'required',
        ]);
        $validatedData['denah'] = $request->file('denah')->store('denah');
        // return dd($validatedData);
        Denah::create($validatedData);
        return redirect('/gedungbaru')->with('success','data berhasil ditambahkan');
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
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required|unique:denahs,nama,'.$id,
            'luas' => 'required',
            'kapasitas' => 'required',
            'denah'=> 'image|file|max:5000',
            'gedung_id' => 'required',
        ];
        
        $data = Denah::findOrFail($id);
    
        if ($request->input('nama') != $data->nama) {
            // do something
            $data->nama = $request->input('nama');
        }
        $validatedData = $request->validate($rules);

        if($request->file('denah')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['denah'] = $request->file('denah')->store('denah');
        }

        Denah::find($id)->update($validatedData);
        return redirect('/gedungbaru')->with('success','data berhasil diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Denah  $denah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $gedungbaru = Denah::find( $id);
        if(Storage::delete($gedungbaru->denah)) {
            $gedungbaru->delete();
         }
        $gedungbaru->delete();
        return redirect('/gedungbaru')->with('success','data berhasil dihapus');
        
    }
}
