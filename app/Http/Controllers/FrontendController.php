<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\guru;
// use App\galeri;
// use App\artikel;
class FrontendController extends Controller
{
// public function index(){
	
// 	return view('layouts.frontend');


// }
 public function index ()
    {
    	return view('layouts.user');
    }
//public function daftar_galeri(){
//	$galeris = galeri::all();
//	return view('frontend.daftargaleri',compact('galeris'));
//}
//public function daftar_artikel(){
//	$artikels = artikel::all();
//	return view('frontend.daftarartikel',compact('artikels'));
//}

 public function index ()
    {
    	return view('layouts.user');
    }

}
