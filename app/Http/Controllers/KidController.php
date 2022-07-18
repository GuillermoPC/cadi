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

            return response()->json(
                [
                  'success' => true,
                  'message' => 'Data inserted successfully'
                ]
            );
       
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
            return MessageResponse::sendResponse($request, 'Datos recuperados exitosamente', $kid);
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
    public function edit(Kid $producto)
    {
        //
    }

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

        return MessageResponse::sendResponse($request, 'Datos actualizados exitosamente', $kid);
    
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
    public function destroy(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $kid = Kid::findOrFail($id);
            $kid->delete();
            DB::commit();
            return MessageResponse::sendResponse($request, 'Datos eliminados exitosamente', $kid);
        } catch (\Exception $e) {
        DB::rollback();
            return MessageResponse::sendResponse($request, '', null, $e);
        }
    }

}
