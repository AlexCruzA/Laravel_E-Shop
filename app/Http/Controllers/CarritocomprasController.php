<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carritocompras;

class CarritocomprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritocompras = Carritocompras::latest()->paginate(5);
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
    public function store(Request $request)
    {
        request()->validate([
          'descripcion' => 'required',
          'id_categoria' => 'required',
          'imagen' => 'required',
          'nombre' => 'required',
          'precio' => 'required',
        ]);
        Carritocompras::create($request->all());
        return redirect()->route('carritocompras.index')->with('success','Carritocompras created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carritocompras = Carritocompras::find($id);
        return view('carritocompras.show', compact('carritocompras'));
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
        Carritocompras::find($id)->delete();
        return redirect()->route('carritocompras.index')->with('success','Carritocompras deleted successfully');
    }
}
