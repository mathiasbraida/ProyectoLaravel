<?php

namespace App\Http\Controllers;

use App\Insumos;
use App\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

          $datos['insumos']=Insumos::paginate(5);

    return view('insumos.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores = Proveedores::all();
    return view('insumos.create', compact('proveedores'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $datosInsumo=request()->except('_token');
        
        
        try {
            Insumos::insert($datosInsumo);
            $creado= true;
            return redirect('insumos')->with('Mensaje','Producto agregado exitosamente');
        } catch (\Throwable $th) {

            $creado= false;
            return redirect('insumos')->with('Mensaje','Producto NO agregado');
        }

      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function show(Insumos $insumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedores = Proveedores::all();
        $insumo = Insumos::findOrFail($id);
        return view('insumos.edit',compact('insumo'), compact('proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insumos  $insumos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosInsumo=request()->except(['_token','_method']);

               
        Insumos::where('id','=',$id)->update($datosInsumo);

        return redirect('insumos')->with('Mensaje','Producto modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insumos  $Insumos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $insumo = Insumos::findOrFail($id);
        
         Insumos::destroy($id);   
        
        
        return redirect('insumos')->with('Mensaje','Producto eliminado exitosamente');

    }
}
