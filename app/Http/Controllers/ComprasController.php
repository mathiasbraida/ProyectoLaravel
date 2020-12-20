<?php

namespace App\Http\Controllers;

use App\Compras;
use App\Empleados;
use App\Proveedores;
use App\Insumos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;

class ComprasController extends Controller
{

        public function exportPdf()
    {
        //

          $compras=Compras::get();
          $pdf = PDF::loadView('reportes.reportecompra', compact('compras'));

    return $pdf->download('compras_list.pdf');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

          $datos['compras']=Compras::paginate(5);

    return view('compras.index',$datos);

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
        $empleados = Empleados::all();
        $proveedores = Proveedores::all();
        
    return view('compras.create', compact('empleados'),compact('proveedores', 'insumos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $datosCompra=request()->except('_token');
        
        Compras::insert($datosCompra);
            return redirect('compras')->with('Mensaje','Compra agregada exitosamente');
       /* try {
            Compras::insert($datosCompra);
            $creado= true;
            return redirect('compras')->with('Mensaje','Compra agregada exitosamente');
        } catch (\Throwable $th) {

            $creado= false;
            return redirect('compras')->with('Mensaje','Compra NO agregada');;
        }

      */
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleados = Empleados::all();
        $proveedores = Proveedores::all();
        $insumos = Insumos::all();
        $compra = Compras::findOrFail($id);
        return view('compras.edit', compact('compra'), compact('empleados', 'insumos', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCompra=request()->except(['_token','_method']);

               
        Compras::where('id','=',$id)->update($datosCompra);

        return redirect('compras')->with('Mensaje','Compra modificada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $compra = Compras::findOrFail($id);
        
         Compras::destroy($id);   
        
        
        return redirect('compras')->with('Mensaje','Compra eliminada exitosamente');

    }
}
