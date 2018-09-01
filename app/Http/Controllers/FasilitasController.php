<?php

namespace App\Http\Controllers;

use App\fasilitas;
use App\kategori_fasilitas;
use File;
use Auth;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $kategfasilitas =fasilitas::with('kategori_fasilitas')->get();
        return view('fasilitass.index',compact('kategfasilitas'));
    }
    public function index1()
    {
         $kategfasilitas1 = fasilitas::all();
        return view('fasilitass.index1',compact('kategfasilitas1')); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategfasilitas = kategori_fasilitas::all();
        $fasilitas = fasilitas::all();

        return view('fasilitass.create',compact('kategfasilitas','fasilitas'));     }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama' => 'required|max:255',
            'poto' => 'required|',
             'kategorifasilitas_id' => 'required|'
           
        ]);

        $fasilitas = new fasilitas;
        $fasilitas->nama = $request->nama;
       
         if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $fasilitas->poto= $filename;
        
        }
        $fasilitas->kategorifasilitas_id = $request->kategorifasilitas_id;
        $fasilitas->save();
        return redirect()->route('fasilitas.index','fasilitas.index1');     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $fasilitas = fasilitas::findOrFail($id);
        $kategfasilitas = kategori_fasilitas::all();
        $selectedes = fasilitas::findOrFail($id)->kategorifasilitas_id;
        return view('fasilitass.edit',compact('fasilitas','kategfasilitas','selectedes'));     

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         $this->validate($request,[
            'nama' => 'required|max:255',
             'poto' => 'required|',
             'kategorifasilitas_id' => 'required|'
           
        ]);
        $fasilitas=fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;
       
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($fasilitas->poto) {
        $old_poto = $fasilitas->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $fasilitas->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $fasilitas->poto = $filename;
}
        $fasilitas->kategorifasilitas_id = $request->kategorifasilitas_id;
         // edit upload poto
        $fasilitas->save();
        return redirect()->route('fasilitas.index');     
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
      {
         $fasilitas = fasilitas::findOrFail($id);
          if ($fasilitas->poto) {
            $old_foto = $fasilitas->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $fasilitas->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');    }
}
