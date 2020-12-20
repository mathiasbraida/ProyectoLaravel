<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes']=Clientes::paginate(5);

    return view('clientes.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    return view('clientes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleado=request()->all();

        $datosCliente=request()->except('_token');
        
        
        try {
            Clientes::insert($datosCliente);
            //$datosCliente -> save();
            $creado= true;
            return redirect('clientes')->with('Mensaje','Cliente agregado exitosamente');
        } catch (\Throwable $th) {

            $creado= false;
            return redirect('clientes')->with('Mensaje','Cliente NO agregado');
        }
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCliente=request()->except(['_token','_method']);

               
        Clientes::where('id','=',$id)->update($datosCliente);

        return redirect('clientes')->with('Mensaje','Cliente modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $cliente = Clientes::findOrFail($id);
        
         Clientes::destroy($id);   
        
        
        return redirect('clientes')->with('Mensaje','Cliente eliminado exitosamente');

    }
}
