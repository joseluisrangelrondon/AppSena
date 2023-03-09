<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
 
class MaterialController extends Controller
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
 
        $material = new Material;
 
        $material->Inv = $request->Inv;
        $material->denominacion = $request->name;
        $material->serie = $request->numero;
        $material->estado = $request->estado;
 
        $material->save();
    }
}