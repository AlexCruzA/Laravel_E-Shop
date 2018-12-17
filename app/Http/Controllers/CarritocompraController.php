<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carritocompra;

class CarritocompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritocompras = Carritocompra::latest()->paginate(5);
        return view('carritocompras.index', compact('carritocompras'))->with('i',(request()->input('page', 1) - 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carritocompras.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //$descripcion, $id_categoria, $imagen, $nombre, $precio
    public function store(Request $request)
    {
        request()->validate([
          'descripcion' => 'required',
          'id_categoria' => 'required',
          'imagen' => 'required',
          'nombre' => 'required',
          'precio' => 'required',
          'cantidad' => 'required',
        ]);
        Carritocompra::create($request->all());
        return redirect()->route('carritocompras.index')->with('success','Carritocompra created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carritocompra::find($id)->delete();
        return redirect()->route('carritocompras.index')->with('success','Carritocompra deleted successfully');
    }
}
