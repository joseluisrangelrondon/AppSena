<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Almacen;
use Illuminate\Http\Request;
 
class AlmacenController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function load(Request $request)
    {
        // Validate the request...
 
        $almacen = new Almacen;
 
        $almacen->encargado = $request->name;
        $almacen->OrdenSuministro = $request->OS;
        $almacen->OrdenEntrada = $request->OE;
        $almacen->Cantidad = $request->Cant;

        $almacen->Inv_id = $request->Inventario;
        $almacen->seccion_id = $request->seccion;
 
        $almacen->save();
    }
    public function update(Request $request)
    {
        // Validate the request...
 
        $almacen = Almacen::find($request->id);
 
        $almacen->encargado = $request->name;
        $almacen->OrdenSuministro = $request->OS;
        $almacen->OrdenEntrada = $request->OE;
        $almacen->Cantidad = $request->Cant;

        $almacen->Inv_id = $request->Inventario;
        $almacen->seccion_id = $request->seccion;
 
        $almacen->save();
    }

    public function delete(Request $request)
   {
        $almacen = Almacen::find($request->id);

        $almacen->delete();
    }
}