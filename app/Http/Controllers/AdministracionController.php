<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministracionController extends Controller
{
    public function index(){

        return view('administracion.administracion');
    }

    public function show(){

        return back();
    }
}
