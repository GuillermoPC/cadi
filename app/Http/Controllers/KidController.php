<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;
use App\Utils\MessageResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $kids = Kid::select('id',
                            'name',
                            'father_last_name',
                            'mother_last_name',
                            'birthdate',
                            'genre',
                            'age',
                            'img',
                            'status as estado',
                            )->get();
                            
        return datatables()->of($kids)
        ->addIndexColumn()
        ->addColumn('action', function($row){
   
            $btn = '<button id="edit-producto" type="button" class="btn btn-success w-30px mx-1 my-1 shadow-sm" data-bs-toggle="modal" data-bs-target="#modal-create-producto"    data-toggle="tooltip" data-placement="bottom" title="Editar"  data-id="'.$row->id.'">      <i class="fas fa-edit"></i>         </button>';

            $btn = $btn.'<button type="button" class="btn btn-danger  w-30px mx-1 my-1 shadow-sm"  data-bs-toggle="modal" data-bs-target="#modal-delete-producto" data-toggle="tooltip" data-placement="bottom" title="Eliminar" data-id="'.$row->id.'">    <i class="fas fa-trash-alt"></i>    </button>';

             return $btn;
        })
        ->rawColumns(['action'])
        ->make(true); */



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            Log::debug($request);

            $this->validate($request,[
                'name'              => 'required',
                'father_last_name'  => 'required',
                'mother_last_name'  => 'required',
                'birthdate'         => 'required',
                'genre'             => 'required',
                'age'               => 'required'
            ]); 

            DB::beginTransaction();

            $kid = new Kid();
            $kid->name              = $request->name;
            $kid->father_last_name  = $request->father_last_name;
            $kid->mother_last_name  = $request->mother_last_name;
            $kid->birthdate         = $request->birthdate;
            $kid->genre             = $request->genre;
            $kid->age               = $request->age;
            $kid->save();

            DB::commit();

            return redirect()->route('administracion.index')->with('agregar-producto','ok');
       
        }catch (\Exception $e) {
          DB::rollback();
          return MessageResponse::sendResponse($request, '', null, $e);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kid  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $kid = Kid::findOrFail($id);
            return MessageResponse::sendResponse($request, 'Datos recuperados exitosamente', $kid)->with('agregar-producto','ok');
        } catch (\Exception $e) {
            return MessageResponse::sendResponse($request, '', null, $e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kid  $producto
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
    {
        $kid = Kid::find($id);
        return response()->json($kid);
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kid  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
  {
    try {
        $this->validate($request,[
            'name'              => 'required',
            'father_last_name'  => 'required',
            'mother_last_name'  => 'required',
            'birthdate'         => 'required',
            'genre'             => 'required',
            'age'               => 'required'
        ]); 

        DB::beginTransaction();
        $kid = Kid::findOrFail($id);
        $kid->name              = $request->name;
        $kid->father_last_name  = $request->father_last_name;
        $kid->mother_last_name  = $request->mother_last_name;
        $kid->birthdate         = $request->birthdate;
        $kid->genre             = $request->genre;
        $kid->age               = $request->age;
        $kid->save();
        DB::commit();

        //return MessageResponse::sendResponse($request, 'Datos actualizados exitosamente', $kid);
        return redirect()->route('administracion.index')->with('actualizar-producto','ok');

    } catch (\Exception $e) {
      DB::rollback();
      return MessageResponse::sendResponse($request, '', null, $e);
    }
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kid  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Log::debug($id);
            DB::beginTransaction();
            $kid = Kid::findOrFail($id);
            $kid->delete();
            DB::commit();
            return redirect()->route('administracion.index')->with('eliminar-producto','ok');

        } catch (\Exception $e) {
        DB::rollback();
            return MessageResponse::sendResponse($request, '', null, $e);
        }
    }

}
