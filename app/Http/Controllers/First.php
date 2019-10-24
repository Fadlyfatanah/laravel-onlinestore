<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class First extends Controller
{
    public function index(){
        return view('First');
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'file' => 'required|max:2048'
        ]);
    
        $file = $request->file('file');
    }
}
