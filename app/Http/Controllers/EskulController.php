<?php

namespace App\Http\Controllers;

use App\eskul;
use File;
use Auth;
use Illuminate\Http\Request;

class EskulController extends Controller
 {
    public function index()
    {
         $eskuls =eskul::all();
        return view('eskull.index',compact('eskuls')); 
    }
    public function index1()
    {
         $eskuls1 =eskul::all();
        return view('eskull.index1',compact('eskuls1')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eskull.create');     }

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
             
             'content' => 'required|min:2'
           
        ]);

        $eskuls = new eskul;
        $eskuls->nama = $request->nama;
         if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $eskuls->poto= $filename;
        
        }
        $eskuls->content = $request->content;
        $eskuls->save();
        return redirect()->route('eskuls.index','eskuls.index1');     }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eskuls = eskul::findOrFail($id);
        return view('eskull.show',compact('eskuls'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eskuls = eskul::findOrFail($id);
        return view('eskull.edit',compact('eskuls'));     }

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
             'nama' => 'required|max:255',
            'poto' => 'required|min:2',
             'content' => 'required|min:2'
            
        ]);

        $eskuls = eskul::findOrFail($id);
        $eskuls->nama = $request->nama;
         if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($eskuls->poto) {
        $old_poto = $eskuls->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $eskuls->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $eskuls->poto = $filename;
}
        $eskuls->content= $request->content;
        $eskuls->save();
        return redirect()->route('eskuls.index');       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $eskuls = eskul::findOrFail($id);
           if ($eskuls->poto) {
            $old_foto = $eskuls->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $eskuls->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $eskuls->delete();
        return redirect()->route('eskuls.index');    }
}