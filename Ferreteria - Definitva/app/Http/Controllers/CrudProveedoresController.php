<?php

namespace App\Http\Controllers;

use App\Models\CrudProveedores;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CrudProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['proveedores']=CrudProveedores::paginate(5);
        return view('other_views.submenudashboar.dashboarprovee.pag_dash_provee',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf(){
        
        
        $datos['proveedores']=CrudProveedores::paginate(5);

        $pdf = Pdf::loadView('other_views.submenudashboar.dashboarprovee.pdf',$datos);
        return $pdf->stream();
    }
    public function create()
    {
        return view('other_views.submenudashboar.dashboarprovee.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosVentas = request()->except('_token'); 
        CrudProveedores::insert($datosVentas);
        
         return redirect('pag_dash_provee')->with('mensaje','Proveedor registrado  con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrudProveedores  $crudProveedores
     * @return \Illuminate\Http\Response
     */
    public function show(CrudProveedores $crudProveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrudProveedores  $crudProveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=CrudProveedores::findOrFail($id);
        return view('other_views.submenudashboar.dashboarprovee.editar',compact('proveedor'))->with('mensaje','actualizacion de datos correcta');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CrudProveedores  $crudProveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProve = request()->except(['_token','_method']); 
        
        CrudProveedores::where('id','=',$id)->update($datosProve);

        $proveedor=CrudProveedores::findOrFail($id);
        return redirect('pag_dash_provee')->with('mensaje','proveedor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrudProveedores  $crudProveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        CrudProveedores::destroy($id);
        return redirect('pag_dash_provee')->with('mensaje','Proveedor eliminado con exito');
    }
}
