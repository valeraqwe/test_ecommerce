<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        Currency::create(['name' => 'USD']);
        Currency::create(['name' => 'EUR']);
    }
}

