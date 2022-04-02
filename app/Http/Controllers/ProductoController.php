<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\Producto\CreateRequest;
use DataTables;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($productos)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
                            return $btn;
                    })
                    ->editColumn('imagen', function($row){
                        $url=asset("storage/$row->path");
                        return '<img src='.$url.' width="200" " />'; 
                    })
                    ->rawColumns(['action','imagen'])
                    ->make(true);
        }
        return view('admin.gestionProductos', compact('productos'));
    }
    public function create(Request $request)
    {
       
    }
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads','public');
        } else {
            $path = 'Ruta no encontrada';
        }

        Producto::updateOrCreate(
            ['id' => $request->id],
            ['nombre' => $request->nombre, 'precio' => $request->precio,'detalles' => $request->detalles,'path' => $path]);
        return response()->json(['success'=>'Producto registrado correctamente.']); 
    }
    public function show(Producto $producto)
    {
        
    }
    public function edit(Producto $producto)
    {
    
    }
    public function update(Request $request, Producto $producto)
    {
    }
    public function destroy($id)
    {
        Producto::find($id)->delete();
        return response()->json(['success'=>'Producto borrado exitosamente.']);   
    }
}
