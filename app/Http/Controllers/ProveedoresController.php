<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $datos['proveedores']=Proveedores::paginate(5);

    return view('proveedores.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    return view('proveedores.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $datosProveedor=request()->except('_token');
        
         try {
            Proveedores::insert($datosProveedor);;
            $creado= true;
            return redirect('proveedores')->with('Mensaje','Proveedor agregado exitosamente');
        } catch (\Throwable $th) {

            $creado= false;
            return redirect('proveedores')->with('Mensaje','Proveedor NO agregado');
        }

      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proveedor = Proveedores::findOrFail($id);
        return view('proveedores.edit',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProveedor=request()->except(['_token','_method']);

               
        Proveedores::where('id','=',$id)->update($datosProveedor);

        return redirect('proveedores')->with('Mensaje','Proveedor modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $cliente = Proveedores::findOrFail($id);
        
         Proveedores::destroy($id);   
        
        
        return redirect('proveedores')->with('Mensaje','Proveedor eliminado exitosamente');

    }
}

