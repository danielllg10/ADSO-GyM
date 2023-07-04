<?php

namespace App\Http\Controllers;

use App\Models\Crudventas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CrudventasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ventas']=Crudventas::paginate(5);
        return view('other_views.submenudashboar.dashboarventas.pag_dash_ventas',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pdf(){
        
        
        $datos['ventas']=Crudventas::paginate(5);

        $pdf = Pdf::loadView('other_views.submenudashboar.dashboarventas.pdf',$datos);
        return $pdf->stream();
    }

    public function create()
    {
        return view('other_views.submenudashboar.dashboarventas.crear');

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
         Crudventas::insert($datosVentas);
        
         return redirect('pag_dash_ventas')->with('mensaje','Venta registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crudventas  $crudventas
     * @return \Illuminate\Http\Response
     */
    public function show(Crudventas $crudventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crudventas  $crudventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta=Crudventas::findOrFail($id);
        return view('other_views.submenudashboar.dashboarventas.editar',compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crudventas  $crudventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosVentas = request()->except(['_token','_method']); 
        
        Crudventas::where('id','=',$id)->update($datosVentas);

        $venta=Crudventas::findOrFail($id);
        return redirect('pag_dash_ventas')->with('mensaje','Venta actualizada correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crudventas  $crudventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Crudventas::destroy($id);
        return redirect('pag_dash_ventas')->with('mensaje','Venta eliminada correctamente');
    }
}
