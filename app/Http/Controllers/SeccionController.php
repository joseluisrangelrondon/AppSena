<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Seccion;
use Illuminate\Http\Request;
 
class SeccionController extends Controller
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
 
        $seccion = new Seccion;
 
        $seccion->seccion = $request->name;
        $seccion->responsable = $request->respons;
        $seccion->cedula = $request->ident;
 
        $seccion->save();
    }

    public function update(Request $request)
    {
        // Validate the request...
        $seccion = Seccion::find($request->id);
       
        $seccion->seccion = $request->name;
        $seccion->responsable = $request->respons;
        $seccion->cedula = $request->ident;
 
        $seccion->save();
    }

    public function delete(Request $request)
   {
    $seccion = Seccion::find($request->id);

    $seccion->delete();
}
   }
    
 
