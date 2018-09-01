<?php

namespace App\Http\Controllers;

use App\kategori_galeri;
use Illuminate\Http\Request;

class KategoriGaleriController extends Controller
 {
    public function index()
    {
         $galeris =kategori_galeri::all();
        return view('kategori_galeri.index',compact('galeris')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_galeri.create');     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama_galeri' => 'required|max:255'
             
        ]);
        $galeris = new kategori_galeri;
        $galeris->nama_galeri = $request->nama_galeri;
        $galeris->save();
         return redirect()->route('kategorisgaleri.index');     
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeris = kategori_galeri::findOrFail($id);
        return view('kategori_galeri.show',compact('galeris'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeris = kategori_galeri::findOrFail($id);
        return view('kategori_galeri.edit',compact('galeris'));     }

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
             'nama_galeri' => 'required|max:255',
        ]);

        $galeris = kategori_galeri::findOrFail($id);
        $galeris->nama_galeri = $request->nama_galeri;
        $galeris->save();
        return redirect()->route('kategorisgaleri.index');      

         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
      {
         $galeris = kategori_galeri::findOrFail($id);
        $galeris->delete();
        return redirect()->route('kategorisgaleri.index');    }
}
