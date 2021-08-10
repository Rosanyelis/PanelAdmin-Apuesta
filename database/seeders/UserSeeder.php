<?php

namespace Database\Seeders;

use App\Models\Agency;
use App\Models\Currency;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'Superadministrador')->first();
        User::create([
            'name' => 'SuperUsuario', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => $role->id,
            'status' => true,
        ]);

        $role = Role::where('name', 'Visitante')->first();
        $currency = Currency::where('name', 'Pesos')->first();
        User::create([
            'firstname' => 'Jon', 
            'lastname' => 'Doe', 
            'dni' => '123456789', 
            'date_of_birth' => '1995-03-12', 
            'phone' => '+5715551234', 
            'responsable' => null, 
            'rif' => null, 
            'tipo_venta' => null,
            'name' => 'JonDoy1', 
            'email' => 'jondoe@gmail.com',
            'password' => Hash::make('doe123'),
            'role_id' => $role->id,
            'status' => true,
            'agency_id' => null, 
            'country_id' => null, 
            'currency_id' => $currency->id, 
            'promotional_code' => null,  
        ]);

        $role = Role::where('name', 'Administrador')->first();
        $currency = Currency::where('name', 'Pesos')->first();
        $agency = Agency::where('name', 'Agencia Demo')->first();
        User::create([
            'firstname' => 'Angela', 
            'lastname' => 'Doe', 
            'dni' => '123456789', 
            'date_of_birth' => '1995-03-12', 
            'phone' => '+5715551234', 
            'responsable' => null, 
            'rif' => null, 
            'tipo_venta' => null,
            'name' => 'AngelaDoy1', 
            'email' => 'angeladoe@gmail.com',
            'password' => Hash::make('doe123'),
            'role_id' => $role->id,
            'status' => true,
            'agency_id' => $agency->id, 
            'country_id' => null, 
            'currency_id' => $currency->id, 
            'promotional_code' => null,  
        ]);

        $role = Role::where('name', 'Administrador')->first();
        $currency = Currency::where('name', 'Pesos')->first();
        $agency = Agency::where('name', 'Agencia Demo')->first();
        User::create([
            'firstname' => 'Carlos', 
            'lastname' => 'Doe', 
            'dni' => '123456789', 
            'date_of_birth' => '1995-03-12', 
            'phone' => '+5715551234', 
            'responsable' => null, 
            'rif' => null, 
            'tipo_venta' => null,
            'name' => 'CarlosDoy1', 
            'email' => 'carlosdoe@gmail.com',
            'password' => Hash::make('doe123'),
            'role_id' => $role->id,
            'status' => true,
            'agency_id' => $agency->id, 
            'country_id' => null, 
            'currency_id' => $currency->id, 
            'promotional_code' => null,  
        ]);
    }
}
