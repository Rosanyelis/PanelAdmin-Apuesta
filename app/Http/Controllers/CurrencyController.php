<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::paginate(5);
        return view('currencies.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('currencies.create');
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
            'acronym' => ['required'],
            'symbol' => ['required', 'max:1'],
        ],[
            'name.required' => 'El valor del campo Nombre de Moneda es obligatorio.',
            'acronym.required' => 'El valor del campo Siglas de Moneda es obligatorio.',
            'symbol.required' => 'El valor del campo Simbolo de Moneda es obligatorio.',
        ]);

        $name = strtoupper($request->input('name'));
        $acronym = strtoupper($request->input('acronym'));
        $symbol = $request->input('symbol');

        $currency = New Currency();
        $currency->name = $name;
        $currency->acronym = $acronym;
        $currency->symbol = $symbol;
        $currency->save();

        return redirect('/monedas')->with('success', 'Nueva Moneda Creada Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = Currency::where('id', $id)->count();
        if($count>0){
            $data = Currency::where('id', $id)->first();
            return view('currencies.show', compact('data'));
        }else{
            return redirect('/monedas')->with('Error', 'Problemas para visualizar el registro');
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
        $count = Currency::where('id', $id)->count();
        if($count>0){
            $data = Currency::where('id', $id)->first();
            return view('currencies.edit', compact('data'));
        }else{
            return redirect('/monedas')->with('Error', 'Problemas para visualizar el registro');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $count = Currency::where('id', $id)->count();
        if($count>0){
            $request->validate([
                'name' => ['required'],
                'acronym' => ['required'],
                'symbol' => ['required', 'max:1'],
            ],[
                'name.required' => 'El valor del campo Nombre de Moneda es obligatorio.',
                'acronym.required' => 'El valor del campo Siglas de Moneda es obligatorio.',
                'symbol.required' => 'El valor del campo Simbolo de Moneda es obligatorio.',
            ]);

            $name = strtoupper($request->input('name'));
            $acronym = strtoupper($request->input('acronym'));
            $symbol = $request->input('symbol');

            $currency = Currency::where('id', $id)->first();
            $currency->name = $name;
            $currency->acronym = $acronym;
            $currency->symbol = $symbol;
            $currency->save();

            return redirect('/monedas')->with('success', 'Moneda Actualizada Exitosamente!');
        }else{
            return redirect('/monedas')->with('Error', 'Problemas para visualizar el registro');
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
        $currency = Currency::where('id', $id)->first();
        $activo = true;

        if ($activo) {
            $count = User::where('currency_id', $currency->id)->count();
            if ($count>0) {
                return redirect('/monedas')->with('danger', 'La Moneda no puede ser eliminada!, existen registros dependientes.');
                $activo = true;
            } else {
                $activo = false;
                Currency::where('id', $id)->delete();
                return redirect('/monedas')->with('success', 'Agencia Eliminada Exitosamente!');
            }
        }
    }
}
