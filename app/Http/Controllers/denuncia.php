<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\denucia;

class denuncia extends Controller
{
    public function create(Request $request){
        denucia::create($request->all());
    }
}
