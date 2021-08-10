<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\User;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::paginate(5);
        return view('agencies.index', compact('agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agencies.create');
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
        ],[
            'name.required' => 'El valor del campo Nombre de Agencia es obligatorio.',
        ]);

        $name = strtoupper($request->input('name'));

        $agency = New Agency();
        $agency->name = $name;
        $agency->save();

        return redirect('/agencias')->with('success', 'Nueva Agencia Creada Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = Agency::where('id', $id)->count();
        if($count>0){
            $data = Agency::where('id', $id)->first();
            return view('agencies.show', compact('data'));
        }else{
            return redirect('/agencias')->with('Error', 'Problemas para visualizar el registro');
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
        $count = Agency::where('id', $id)->count();
        if($count>0){
            $data = Agency::where('id', $id)->first();
            return view('agencies.edit', compact('data'));
        }else{
            return redirect('/agencias')->with('Error', 'Problemas para visualizar el registro');
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
        $count = Agency::where('id', $id)->count();
        if($count>0){

            $request->validate([
                'name' => ['required'],
            ],[
                'name.required' => 'El valor del campo Nombre de Agencia es obligatorio.',
            ]);
    

            $name = strtoupper($request->input('name'));

            $agency = Agency::where('id', $id)->first();
            $agency->name = $name;
            $agency->save();

            return redirect('/agencias')->with('success', 'Agencia Actualizada Exitosamente!');
        }else{
            return redirect('/agencias')->with('Error', 'Problemas para visualizar el registro');
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
        $agency = Agency::where('id', $id)->first();
        $activo = true;

        if ($activo) {
            $count = User::where('agency_id', $agency->id)->count();
            if ($count>0) {
                return redirect('/agencias')->with('danger', 'La Agencia no puede ser eliminada!, existen registros dependientes.');
                $activo = true;
            } else {
                $activo = false;
                Agency::where('id', $id)->delete();
                return redirect('/agencias')->with('success', 'Agencia Eliminada Exitosamente!');
            }
        }
    }
}
