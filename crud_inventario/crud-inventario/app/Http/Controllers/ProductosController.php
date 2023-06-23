<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['Productos']=Productos::paginate(3);
        return view("Productos.index", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'NOMBRE'=>'required|string|max:50',
            'DESCRIPCION'=>'required|string|max:200',
            'PRECIO'=>'required|float|4,5',
            'STOCK'=>'required|int|max:10',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida'
        ];

        $this->validate($request, $campos, $mensaje);

        //$datosProductos = request()->all();
        $datosProductos = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosProductos['Foto']=$request->file('Foto')->store('uploads', 'public');
        }


        Productos::insert($datosProductos);
        //return response()->json($datosProductos);
        return redirect("producto")->with('mensaje','Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $productos=Productos::findOrFail($id);
        return view('Productos.edit', compact('Productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'NOMBRE'=>'required|string|max:50',
            'DESCRIPCION'=>'required|string|max:200',
            'PRECIO'=>'required|float|4,5',
            'STOCK'=>'required|int|max:10',

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];
        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La foto es requerida'];

        }

        $this->validate($request, $campos, $mensaje);


        $datosProductos = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $productos=producto::findOrFail($id);
            Storage::delete('public/'.$producto->Foto);
            $datosProductos['Foto']=$request->file('Foto')->store('uploads', 'public');
            }

        producto::where('id', '=', $id)->update($datosProductos);
        $productos=producto::findOrFail($id);
        //return view('Productos.edit', compact('producto'));
        return redirect("producto")->with('mensaje','Producto modificado');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $productos=producto::findOrFail($id);
        if(Storage::delete('public/'.$producto->Foto)){
            Productos::destroy($id);

        }





        return redirect("producto")->with('mensaje','Producto borrado');
    }
}
