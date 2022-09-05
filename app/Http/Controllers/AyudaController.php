<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kid;

class AyudaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*
        public function __construct()
        {
            $this->middleware('auth');
        }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datosNiños  = Kid ::orderBy('id','DESC')       ->paginate(Kid ::all()->count());
        return view('ayuda',['ninos'      =>  $datosNiños]);
    }
}
