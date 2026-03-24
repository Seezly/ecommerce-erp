<?php

namespace App\Models;

use App\Models\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class BusinessPaymentMethod extends Model
{
    use UsesUuid;

    public $incrementing = false;
    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'config' => 'array',
        ];
    }
}
