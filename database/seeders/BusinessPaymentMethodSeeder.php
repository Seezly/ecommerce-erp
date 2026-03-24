<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\PaymentMethod;
use App\Models\BusinessPaymentMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BusinessPaymentMethodSeeder extends Seeder
{
    public function run()
    {
        $business = Business::where('name', 'Demo Store')->first();

        $manual = PaymentMethod::where('type', 'manual')->first();

        BusinessPaymentMethod::create([
            'id' => Str::uuid(),
            'business_id' => $business->id,
            'payment_method_id' => $manual->id,
            'is_enabled' => true,
            'config' => [
                'title' => 'Transferencia Bancaria',
                'instructions' => 'Realiza el pago y sube el comprobante',
                'fields' => [
                    [
                        'name' => 'bank',
                        'label' => 'Banco',
                        'value' => 'Banesco'
                    ],
                    [
                        'name' => 'account_number',
                        'label' => 'Cuenta',
                        'value' => '0123456789'
                    ],
                    [
                        'name' => 'account_name',
                        'label' => 'Titular',
                        'value' => 'Juan Pérez'
                    ],
                ],
                'requires_proof' => true
            ],
        ]);
    }
}
