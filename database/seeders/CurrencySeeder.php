<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'name' => 'Dolares', 
            'acronym' => 'USD',
            'symbol' => '$',
        ]);
        Currency::create([
            'name' => 'Pesos', 
            'acronym' => 'COP',
            'symbol' => '$',
        ]);
        Currency::create([
            'name' => 'Euros', 
            'acronym' => 'EUR',
            'symbol' => '€',
        ]);
    }
}
