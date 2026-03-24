<?php

namespace App\Models;

use App\Models\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use UsesUuid;

    public $incrementing = false;
    protected $keyType = 'string';

    const SYSTEM_ID = "00000000-0000-0000-0000-000000000000";

    protected $fillable = [
        'name',
        'status',
        'currency_id',
        'referral_code',
        'referred_by_business_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function referredBy()
    {
        return $this->belongsTo(Business::class, 'referred_by_business_id');
    }

    public function referrals()
    {
        return $this->hasMany(Business::class, 'referred_by_business_id');
    }

    public function settings()
    {
        return $this->hasMany(BusinessSetting::class);
    }
}
