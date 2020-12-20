<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\Clientes;
use App\Proveedores;
use App\Insumos;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $datos['ventas']=Ventas::paginate(5);

    return view('ventas.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $insumos = Insumos::all();
        $clientes = Clientes::all();
        $proveedores = Proveedores::all();
        
    return view('ventas.create', compact('clientes','proveedores', 'insumos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosVenta=request()->except('_token');
        
        Ventas::insert($datosVenta);
        redirect('ventas')->with('Mensaje','Venta agregada exitosamente');

       /* try {
            Ventas::insert($datosVenta);
            $creado= true;
            return redirect('ventas')->with('Mensaje','Venta agregada exitosamente');
        } catch (\Throwable $th) {

            $creado= false;
            return redirect('ventas')->with('Mensaje','Venta NO agregada');;
        }
        
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $clientes = Clientes::all();
        $proveedores = Proveedores::all();
        $insumos = Insumos::all();
        $venta = Ventas::findOrFail($id);
        return view('ventas.edit', compact('venta'), compact('clientes','proveedores', 'insumos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosVenta=request()->except(['_token','_method']);

               
        Ventas::where('id','=',$id)->update($datosVenta);

        return redirect('ventas')->with('Mensaje','Venta modificada exitosamente');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $venta = Ventas::findOrFail($id);
        
         Ventas::destroy($id);   
        
        
        return redirect('ventas')->with('Mensaje','Venta eliminada exitosamente');

    }
    
}
