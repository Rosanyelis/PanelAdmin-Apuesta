<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::paginate(5);
        return view('banks.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banks.create');
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
            'code' => ['required'],
            'name' => ['required'],
        ],[
            'code.required' => 'El valor del campo Código de Banco es obligatorio.',
            'name.required' => 'El valor del campo Nombre de Banco es obligatorio.',
        ]);

        $code = $request->input('code');
        $name = strtoupper($request->input('name'));

        $bank = New Bank();
        $bank->code = $code;
        $bank->name = $name;
        $bank->save();

        return redirect('/bancos')->with('success', 'Nuevo Banco Creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = Bank::where('id', $id)->count();
        if($count>0){
            $data = Bank::where('id', $id)->first();
            return view('banks.show', compact('data'));
        }else{
            return redirect('/bancos')->with('Error', 'Problemas para visualizar el registro');
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
        $count = Bank::where('id', $id)->count();
        if($count>0){
            $data = Bank::where('id', $id)->first();
            return view('banks.edit', compact('data'));
        }else{
            return redirect('/bancos')->with('Error', 'Problemas para visualizar el registro');
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
        $count = Bank::where('id', $id)->count();
        if($count>0){

            $request->validate([
                'code' => ['required'],
                'name' => ['required'],
            ],[
                'code.required' => 'El valor del campo Código de Agencia es obligatorio.',
                'name.required' => 'El valor del campo Nombre de Agencia es obligatorio.',
            ]);

            $code = $request->input('code');
            $name = strtoupper($request->input('name'));

            $bank = Bank::where('id', $id)->first();
            $bank->code = $code;
            $bank->name = $name;
            $bank->save();

            return redirect('/bancos')->with('success', 'Banco Actualizado Exitosamente!');
        }else{
            return redirect('/bancos')->with('Error', 'Problemas para visualizar el registro');
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
        $bank = Bank::where('id', $id)->first();
        $activo = true;

        if ($activo) {
           
            Bank::where('id', $id)->delete();
            return redirect('/bancos')->with('success', 'Banco Eliminado Exitosamente!');
            
        }
    }
}
