<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Utils\MessageResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Response;


class BlogController extends Controller
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
            $this->validate($request,[
                'author'    => 'required',
                'title'     => 'required',
                'body'      => 'required',
                'img'       => 'image|max:2048',
            ]); 
            DB::beginTransaction();
            if($request->id){
                $Blog = Blog::findOrFail($request->id);
                $Blog->author   = $request->author;
                $Blog->title    = $request->title;
                $Blog->body     = $request->body;
                if($request->hasFile('img')){
                    $imagenes       = $request->file('img')->store('public/imagenes/blogs');
                    $url            = Storage::url($imagenes);
                    $Blog->img      = $url;
                }
                $Blog->save();
            }else{
                $Blog = new Blog();
                $Blog->author   = $request->author;
                $Blog->title    = $request->title;
                $Blog->body     = $request->body;
                if($request->hasFile('img')){
                    $imagenes       = $request->file('img')->store('public/imagenes/niños');
                    $url            = Storage::url($imagenes);
                    $Blog->img      = $url;
                }
                $Blog->save();
            }
            DB::commit();
            return redirect()->route('administracion.index')->with('agregar-blog','ok');
        }catch (\Exception $e) {
          DB::rollback();
          return MessageResponse::sendResponse($request, '', null, $e);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $Blog = Blog::findOrFail($id);
            return MessageResponse::sendResponse($request, 'Datos recuperados exitosamente', $Blog)->with('agregar-blog','ok');
        } catch (\Exception $e) {
            return MessageResponse::sendResponse($request, '', null, $e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $producto
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
    {
        $Blog = Blog::find($id);
        return response()->json($Blog);
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(!isset($request->elemento_id))
            return redirect()->back()->with('error','Error al eliminar elemento');
        Blog::find($request->elemento_id)->delete();
        return redirect()->back()->with('success','Elemento eliminado correctamente');
    }

    public function delete(Request $request)
    {
        Log::debug($request);
        if(!isset($request->delete_blog_id))
            return redirect()->back()->with('error','Error al eliminar elemento');
        Blog::find($request->delete_blog_id)->delete();
        return redirect()->back()->with('eliminar-blog','ok');
    }

    public function getBlogById($id){
        $Blog = Blog::find($id);
        return response()->json($Blog);
    }

    public function UpdateStatusBlog(Request $request){
        $BlogUpdate = Blog::findOrFail($request->id);
        $BlogUpdate->status = $request->status;
        $BlogUpdate->save();

        if($request->status == 0){
            $newStatus = '<button type="button" class="btn btn-sm btn-danger">Inactivo</button>';
        }else{
            $newStatus = '<button type="button" class="btn btn-sm btn-success">Activo</button>';
        }

        return response()->json(['var'=>''.$newStatus.'']);
    }

}
