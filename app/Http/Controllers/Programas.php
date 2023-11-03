<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Programas extends Controller
{
    public function index()
    {
        $programas = DB::table('programa')
                    -> join('facultad','codfacultad','=','fk_facultad')->get();
        return view('programas.listado',['program'=> $programas]);
    }
}
