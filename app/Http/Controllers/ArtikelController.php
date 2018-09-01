<?php

namespace App\Http\Controllers;

use App\artikel;
use App\kategori_artikel;
use File;
use Auth;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kartikel =artikel::with('kategori_artikel')->get();
        return view('artikel.index',compact('kartikel'));
    }
    public function index11()
    {
         $kartikel1 =artikel::all();
        return view('artikel.index1',compact('kartikel1')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartikel = kategori_artikel::all();
        $artikels = artikel::all();

        return view('artikel.create',compact('kartikel','artikels'));     }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'judul' => 'required|max:255',
             'deskripsi' => 'required|',
            'poto' => 'required|',
             'kategoriartikel_id' => 'required|'
           
        ]);

        $artikels = new artikel;
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi;
         if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $artikels->poto= $filename;
        
        }
        $artikels->kategoriartikel_id = $request->kategoriartikel_id;
        $artikels->save();
        return redirect()->route('artikels.index','artikels.index1');     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $artikels = artikel::findOrFail($id);
        $kartikel = kategori_artikel::all();
        $selectedes = artikel::findOrFail($id)->kategoriartikel_id;
        return view('artikel.edit',compact('artikels','kartikel','selectedes'));     

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         $this->validate($request,[
            'judul' => 'required|max:255',
             'deskripsi' => 'required|min:2',
             'poto' => 'required|',
             'kategoriartikel_id' => 'required|'
           
        ]);
        $artikels=artikel::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->deskripsi = $request->deskripsi;
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($artikels->poto) {
        $old_poto = $artikels->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $artikels->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikels->poto = $filename;
}
        $artikels->kategoriartikel_id = $request->kategoriartikel_id;
         // edit upload poto
        $artikels->save();
        return redirect()->route('artikels.index');     
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
      {
         $artikels = artikel::findOrFail($id);
          if ($artikels->poto) {
            $old_foto = $artikels->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $artikels->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $artikels->delete();
        return redirect()->route('artikels.index');    }
}
