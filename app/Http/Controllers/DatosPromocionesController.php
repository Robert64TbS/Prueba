<?php

namespace App\Http\Controllers;

use App\Models\DatosPromociones;
use App\Exports\DatosPromocionesExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DatosPromocionesController extends Controller
{

    public function listarDatosPromociones()
    {
        $datos_promociones = DatosPromociones::orderBy('created_at', 'DESC')->paginate(10);
    
        return view('home', compact('datos_promociones'));
    }
    

    public function create()
    {
        return view('inicio');
    }

    public function store(Request $request)
    {
        DatosPromociones::create($request->all());
        $message = 'Información enviada correctamente';
        return response()->json(['success' => $message]);
    }

    public function destroy(string $id)
    {
        $datos_promociones = DatosPromociones::findOrFail($id);

        $datos_promociones->delete();

        return redirect()->route('home')->with('success', 'Registro borrado correctamente');
    }

    public function exportarTabla() 
    {
        return Excel::download(new DatosPromocionesExport, 'registros.xlsx');
    }

}
