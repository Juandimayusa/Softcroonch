<?php

namespace App\Http\Controllers;

use App\Models\proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProveedoresController extends Controller
{

    public function index()
    {
        $lista_proveedores = proveedores::get();
        return view('proveedor.listaproveedores', ['lista_proveedores' => $lista_proveedores]);
    }


    public function create()
    {
        return view('proveedor.crearproveedor');
    }


    public function store(Request $request)
    {
        $reglas = [];
        $mensajespersonalizados = [];
        //si hay algun error se devuelve a la vista anterior
        $validacion = Validator::make($request->all(), $reglas, $mensajespersonalizados);
        if ($validacion->fails()) {
            return redirect()->back()->withErrors($validacion)->withInput();
        }
        $nuevo_proveedor = new proveedores();
        $nuevo_proveedor->Nombre = $request->Nombre;
        $nuevo_proveedor->Email = $request->Email;
        $nuevo_proveedor->Nit = $request->Nit;
        $nuevo_proveedor->Telefono = $request->Telefono;
        $nuevo_proveedor->Direccion = $request->Direccion;

        $nuevo_proveedor->save();

        return redirect()->route('crud-proveedores');
    }


    public function show(proveedores $proveedores)
    {
    }


    public function edit(proveedores $proveedores)
    {
        return view('proveedor.modificarproveedor', ['datos_proveedor' => $proveedores]);
    }


    public function update(Request $request, proveedores $proveedores)
    {
        $reglas = [];
        $mensajespersonalizados = [];
        //si hay algun error se devuelve a la vista anterior 
        $validacion = Validator::make($request->all(), $reglas, $mensajespersonalizados);
        if ($validacion->fails()) {
            return redirect()->back()->withErrors($validacion)->withInput();
        }
        $proveedores->Nombre = $request->Nombre;
        $proveedores->Email = $request->Email;
        $proveedores->Nit = $request->Nit;
        $proveedores->Telefono = $request->Telefono;
        $proveedores->Direccion = $request->Direccion;

        $proveedores->save();
        return redirect()->route('crud-proveedores');
    }


    public function destroy(proveedores $proveedores)
    {
        proveedores::destroy($proveedores->id);
        
        return redirect()->route('crud-proveedores');
    }
}
