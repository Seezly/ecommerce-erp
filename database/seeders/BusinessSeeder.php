<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currency = Currency::first();

        // 🔹 SYSTEM
        Business::create([
            'id' => '00000000-0000-0000-0000-000000000000',
            'name' => 'System',
            'status' => 'active',
            'currency_id' => $currency->id,
            'referral_code' => 'SYSTEM',
        ]);

        // 🔹 DEMO BUSINESS
        Business::create([
            'id' => Str::uuid(),
            'name' => 'Demo Store',
            'status' => 'trial',
            'currency_id' => $currency->id,
            'referral_code' => Str::upper(Str::random(8)),
            'trial_ends_at' => now()->addDays(14),
        ]);
    }
}
