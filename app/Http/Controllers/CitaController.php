<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cita\CreateRequest;
use App\Models\Cita;
use Illuminate\Http\Request;
use DataTables;
use DB;

class CitaController extends Controller
{
    public function index(Request $request)
    {
        $citas = DB::select('select c.id, u.name,c.contacto,c.mascota,c.fecha,c.detalles from citas c inner join users u on c.user_id = u.id');
        if ($request->ajax()) {
            return Datatables::of($citas)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.gestionCitas', compact('citas'));
    }
    public function store(Request $request)
    {
        $id = $request->id;
        $user_id = $request->user_id;
        $cuidador = $request->cuidador;
        $contacto = $request->contacto;
        $mascota = $request->mascota;
        $fecha = $request->fecha;
        $detalles = $request->detalles;
        
        $cita = Cita::where('id',$id)->first();

        if(is_null($cita)) {
            $cita = new Cita([
                'user_id' => $user_id,
                'cuidador' => $cuidador,
                'contacto' => $contacto,
                'mascota' => $mascota,
                'fecha' => $fecha,
                'detalles' => $detalles,
            ]);
            $cita->save();
        } else {
            $cita->contacto = $contacto;
            $cita->mascota = $mascota;
            $cita->fecha = $fecha;
            $cita->detalles = $detalles;
            $cita->update();
        }
        return response()->json(['success'=>'Cita registrada correctamente.']);
    }
    public function edit($id)
    {
        return Cita::findOrFail($id);   
    }
    public function destroy($id)
    {
        Cita::find($id)->delete();
        return response()->json(['success'=>'Cita deleted successfully.']);
    }
}

