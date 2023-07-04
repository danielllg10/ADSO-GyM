<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=Producto::paginate(5);
        return view('other_views.submenudashboar.dashboarproductos.pag_dash_productos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf(){
        
        
        $datos['productos']=Producto::paginate(5);

        $pdf = Pdf::loadView('other_views.submenudashboar.dashboarproductos.pdf',$datos);
        return $pdf->stream();
    }
    public function create()
    {
        return view('other_views.submenudashboar.dashboarproductos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');       
        Producto::insert($datosProducto);

        return redirect('pag_dash_productos')->with('mensaje','Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        return view('other_views.submenudashboar.dashboarproductos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Stock'=>'required|intenger|max:100',
            'Categoria'=>'required|string|max:100',
            'Precio'=>'required|integer|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];
        $datosProducto = request()->except('_token', '_method');
        
        Producto::where('id','=',$id)->update($datosProducto);
        $producto=Producto::findOrFail($id);
        //return view('producto.edit', compact('producto') );

        return redirect('pag_dash_productos')->with('mensaje','Producto Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        
        return redirect('pag_dash_productos')->with('mensaje','Producto eliminado');
    }
}
