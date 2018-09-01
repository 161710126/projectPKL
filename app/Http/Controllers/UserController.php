<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
use App\artikel;
use App\eskul;
use App\fasilitas;
use App\galeri;
use App\prestasi;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::all();
        $gurus1 =guru::all();
         $eskuls1 =eskul::all();
         $kartikels1 = artikel::all();
          $kategfasilitas1 = fasilitas::all();
          $prestasis1 = prestasi::all();
    	return view('layouts.user',compact('user','gurus1','eskuls1','kartikels1','kategfasilitas1','prestasis1'));
    }
     
    }

