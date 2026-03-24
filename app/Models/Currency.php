<?php

namespace App\Models;

use App\Models\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use UsesUuid;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'decimals',
        'symbol'
    ];
}
