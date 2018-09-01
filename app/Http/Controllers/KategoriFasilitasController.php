<?php

namespace App\Http\Controllers;

use App\kategori_fasilitas;
use Illuminate\Http\Request;

class KategoriFasilitasController extends Controller
 {
    public function index()
    {
         $kategfasilitas =kategori_fasilitas::all();
        return view('kategori_fasilitas.index',compact('kategfasilitas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_fasilitas.create');     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama_fasilitas' => 'required|max:255'
             
        ]);
        $kategfasilitas = new kategori_fasilitas;
        $kategfasilitas->nama_fasilitas = $request->nama_fasilitas;
        $kategfasilitas->save();
         return redirect()->route('kategorisfasilitas.index');     
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategfasilitas = kategori_fasilitas::findOrFail($id);
        return view('kategori_fasilitas.show',compact('kategfasilitas'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategfasilitas = kategori_fasilitas::findOrFail($id);
        return view('kategori_fasilitas.edit',compact('kategfasilitas'));     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
             'nama_fasilitas' => 'required|max:255',
        ]);

        $kategfasilitas = kategori_fasilitas::findOrFail($id);
        $kategfasilitas->nama_fasilitas = $request->nama_fasilitas;
        $kategfasilitas->save();
        return redirect()->route('kategorisfasilitas.index');      

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
      {
         $kategfasilitas = kategori_fasilitas::findOrFail($id);
        $kategfasilitas->delete();
        return redirect()->route('kategorisfasilitas.index');    }
}
