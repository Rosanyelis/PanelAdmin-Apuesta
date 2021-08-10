<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Superadministrador', 
            'description' => 'Control total del sistema, para modificaciones o configuraciones generales.',
        ]);
        Role::create([
            'name' => 'Administrador', 
            'description' => 'Control total del sistema, menos las áreas críticas del sistema.',
        ]);
        Role::create([
            'name' => 'Visitante', 
            'description' => 'Acceso a la web de apuestas.',
        ]);
    }
}
