<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Kid;

class AdministracionController extends Controller
{
    public function index(){

        $datosNiños  = Kid ::orderBy('id','DESC')       ->paginate(Kid ::all()->count());

        return view('administracion.administracion',['ninos'      =>  $datosNiños]);
    }

    public function show(){

        return back();
    }
}
