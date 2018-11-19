<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\denuncias;

class denunciaController extends Controller
{
    public function create(Request $request){
        denuncias::create($request->all());
    }

    public function showform(){
        return view ('denuncias');
    }
}
