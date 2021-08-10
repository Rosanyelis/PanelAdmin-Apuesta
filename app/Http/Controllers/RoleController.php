<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::whereNotIn('name', ['Superadministrador'])->paginate(5);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ],[
            'name.required' => 'El valor del campo Nombre del Rol es obligatorio.',
            'description.required' => 'El valor del campo Descripción del Rol es obligatorio.',
        ]);

        $name = ucfirst($request->input('name'));
        $description = ucfirst($request->input('description'));

        $role = New Role();
        $role->name = $name;
        $role->description = $description;
        $role->save();

        return redirect('/roles')->with('success', 'Nuevo Rol Creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = Role::where('id', $id)->count();
        if($count>0){
            $data = Role::where('id', $id)->first();
            return view('roles.show', compact('data'));
        }else{
            return redirect('/roles')->with('Error', 'Problemas para visualizar el registro');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Role::where('id', $id)->count();
        if($count>0){
            $data = Role::where('id', $id)->first();
            return view('roles.edit', compact('data'));
        }else{
            return redirect('/roles')->with('Error', 'Problemas para visualizar el registro');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Role::where('id', $id)->count();
        if($count>0){

            $request->validate([
                'name' => ['required'],
                'description' => ['required'],
            ],[
                'name.required' => 'El valor del campo Nombre del Rol es obligatorio.',
                'description.required' => 'El valor del campo Descripción del Rol es obligatorio.',
            ]);

            $name = ucfirst($request->input('name'));
            $description = ucfirst($request->input('description'));

            $role = Role::where('id', $id)->first();
            $role->name = $name;
            $role->description = $description;
            $role->save();

            return redirect('/roles')->with('success', 'Rol Actualizado Exitosamente!');
        }else{
            return redirect('/roles')->with('Error', 'Problemas para visualizar el registro');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::where('id', $id)->first();
        $activo = true;

        if ($activo) {
            $count = User::where('role_id', $role->id)->count();
            if ($count>0) {
                return redirect('/roles')->with('danger', 'El Rol no puede ser eliminado!, existen registros dependientes.');
                $activo = true;
            } else {
                $activo = false;
                Role::where('id', $id)->delete();
                return redirect('/roles')->with('success', 'Rol Eliminada Exitosamente!');
            }
        }
    }
}
