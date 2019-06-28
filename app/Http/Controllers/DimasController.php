<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DimasController extends Controller
{
    //
    public function input(){
    	return view('input');
    }

    public function proses(Request $request)
    {
        $messages = [
            'required'  => ':attributenya isi dong',
            'min'       => ':attributenya kurang',
            'max'       => ':atrributenya maksimal sekian' ,
        ];


    	$this->validate($request,[
    		'nama' 		=> 'required|min:5|max:20',
    		'pekerjaan' => 'required',
    		'usia'		=> 'required|numeric'
    	],$messages);

        //proses simpan data mulai dari sini

    	return view('proses',['data' => $request]);
    }
}
