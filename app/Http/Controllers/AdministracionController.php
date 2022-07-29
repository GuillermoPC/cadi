<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Kid;
use App\Models\Blog;


class AdministracionController extends Controller
{
    public function index(){

        $datosNiños  = Kid ::orderBy('id','DESC')       ->paginate(Kid ::all()->count());

        $datosBlog  = Blog ::orderBy('id','DESC')       ->paginate(Blog ::all()->count());

        return view('administracion.administracion',['ninos'      =>  $datosNiños,
                                                     'blogs'      =>  $datosBlog]);
    }

    public function show(){

        return back();
    }
}
