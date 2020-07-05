<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\artikelModels;
class ArtikelController extends Controller
{
    //
    public function create(){
    	return view('artikel.form');
    }
    public function store(Request $request){
    	$new_artikel == artikelModels::save($request->all());
    	return redirect('/artikel');
    }
    public function index(){
    	$artikel = artikelModels::get_all();
    	return view('artikel.index');
    }
}
