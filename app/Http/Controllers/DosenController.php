<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	//return "Halo ini adalah method index, dalam controller dosen";
    	$nama = "Dimas Eka Mahendra";
    	$pelajaran = ["MTK","Indo","PKN"];
    	return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
