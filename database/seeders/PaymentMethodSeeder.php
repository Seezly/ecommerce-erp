<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethod::insert([
            [
                'id' => Str::uuid(),
                'name' => 'Manual',
                'type' => 'manual',
                'is_active' => true,
                'config' => null,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Stripe',
                'type' => 'card',
                'is_active' => true,
                'config' => null,
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Binance',
                'type' => 'crypto',
                'is_active' => true,
                'config' => null,
            ],
        ]);
    }
}
