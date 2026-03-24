<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;
use Illuminate\Support\Str;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'id' => (string) Str::uuid(),
            'code' => 'USD',
            'symbol' => '$',
            'decimals' => '2',
        ]);

        Currency::create([
            'id' => (string) Str::uuid(),
            'code' => 'VES',
            'symbol' => 'Bs',
            'decimals' => '2',
        ]);
    }
}
