<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::with('role')->paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNotIn('name', ['Superadministrador'])->get();
        $currencies = Currency::all();
        $countries = Country::all();
        $agencies = Agency::all();

        return view('users.create', compact('roles', 'currencies', 'countries', 'agencies'));
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
            'firstname' => ['required'],
            'lastname' => ['required'],
            'dni' => ['required'],
            'date_of_birth' => ['required', 'date'],
            'phone' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'role_id' => ['required'],
            'country_id' => ['required'],
        ],[
            'firstname.required' => 'El valor del campo Nombre es obligatorio.',
            'lastname.required' => 'El valor del campo Apellido es obligatorio.',
            'dni.required' => 'El valor del campo Documento de Identidad o DNI es obligatorio.',
            'date_of_birth.required' => 'El valor del campo Fecha de Nacimiento es obligatorio.',
            'phone.required' => 'El valor del campo Teléfono es obligatorio.',
            'name.required' => 'El valor del campo Nombre de Usuario es obligatorio.',
            'email.required' => 'El valor del campo Correo Electrónico es obligatorio.',
            'password.required' => 'El valor del campo Password es obligatorio.',
            'role_id.required' => 'El valor del campo Rol es obligatorio.',
            'country_id.required' => 'El valor del campo País es obligatorio.',
        ]);

        $firstname = ucfirst($request->input('firstname'));
        $lastname = ucfirst($request->input('lastname'));
        $dni = ucfirst($request->input('dni'));
        $date_of_birth = $request->input('date_of_birth');
        $phone = ucfirst($request->input('phone'));
        $country_id = $request->input('country_id');
        
        $currency_id = $request->input('currency_id');
        $agency_id = $request->input('agency_id');
        $responsable = ucfirst($request->input('responsable'));
        $rif = ucfirst($request->input('rif'));

        $name = ucfirst($request->input('name'));
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $role_id = $request->input('role_id');
        
        $tipo_venta = ucfirst($request->input('tipo_venta'));
        $promotional_code = $request->input('promotional_code');

        $user = New User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->dni = $dni;
        $user->date_of_birth = $date_of_birth;
        $user->phone = $phone;
        $user->country_id = $country_id;
        $user->currency_id = $currency_id;
        $user->agency_id = $agency_id;
        $user->responsable = $responsable;
        $user->rif = $rif;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->role_id = $role_id;
        $user->promotional_code = $promotional_code;
        $user->tipo_venta = $tipo_venta;
        $user->save();

        return redirect('/usuarios')->with('success', 'Nuevo Usuario Creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = User::where('id', $id)->count();
        if($count>0){

            $data = User::where('id', $id)->with('role')->first();
            
            return view('users.show', compact('data'));
        }else{
            return redirect('/usuarios')->with('Error', 'Problemas para visualizar el registro');
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
        $count = User::where('id', $id)->count();
        if($count>0){

            $data = User::with('role', 'currency', 'country', 'agency')->where('id', $id)->first();
            $roles = Role::whereNotIn('name', ['Superadministrador'])->get();
            $currencies = Currency::all();
            $countries = Country::all();
            $agencies = Agency::all();

            return view('users.edit', compact('data', 'roles', 'currencies', 'countries', 'agencies'));
        }else{
            return redirect('/usuarios')->with('Error', 'Problemas para visualizar el registro');
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
        $count = User::where('id', $id)->count();
        if($count>0){

            $request->validate([
                'firstname' => ['required'],
                'lastname' => ['required'],
                'dni' => ['required'],
                'date_of_birth' => ['required', 'date'],
                'phone' => ['required'],
                'name' => ['required'],
                'email' => ['required'],
                'role_id' => ['required'],
                'country_id' => ['required'],
            ],[
                'firstname.required' => 'El valor del campo Nombre es obligatorio.',
                'lastname.required' => 'El valor del campo Apellido es obligatorio.',
                'dni.required' => 'El valor del campo Documento de Identidad o DNI es obligatorio.',
                'date_of_birth.required' => 'El valor del campo Fecha de Nacimiento es obligatorio.',
                'phone.required' => 'El valor del campo Teléfono es obligatorio.',
                'name.required' => 'El valor del campo Nombre de Usuario es obligatorio.',
                'email.required' => 'El valor del campo Correo Electrónico es obligatorio.',
                'role_id.required' => 'El valor del campo Rol es obligatorio.',
                'country_id.required' => 'El valor del campo País es obligatorio.',
            ]);

            $firstname = ucfirst($request->input('firstname'));
            $lastname = ucfirst($request->input('lastname'));
            $dni = ucfirst($request->input('dni'));
            $date_of_birth = $request->input('date_of_birth');
            $phone = ucfirst($request->input('phone'));
            $country_id = $request->input('country_id');
            
            $currency_id = $request->input('currency_id');
            $agency_id = $request->input('agency_id');
            $responsable = ucfirst($request->input('responsable'));
            $rif = ucfirst($request->input('rif'));

            $name = ucfirst($request->input('name'));
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            $role_id = $request->input('role_id');
            
            $tipo_venta = ucfirst($request->input('tipo_venta'));
            $promotional_code = $request->input('promotional_code');

            $user = User::where('id', $id)->first();
            $user->firstname = $firstname;
            $user->lastname = $lastname;
            $user->dni = $dni;
            $user->date_of_birth = $date_of_birth;
            $user->phone = $phone;
            $user->country_id = $country_id;
            $user->currency_id = $currency_id;
            $user->agency_id = $agency_id;
            $user->responsable = $responsable;
            $user->rif = $rif;
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
            $user->role_id = $role_id;
            $user->promotional_code = $promotional_code;
            $user->tipo_venta = $tipo_venta;
            $user->save();

            return redirect('/usuarios')->with('success', 'Usuario Actualizado Exitosamente!');
        }else{
            return redirect('/usuarios')->with('Error', 'Problemas para visualizar el registro');
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
        //
    }
}
