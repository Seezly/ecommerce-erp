<?php

namespace App\Models;

use App\Models\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use UsesUuid;

    public $incrementing = false;
    protected $keyType = 'string';
}
