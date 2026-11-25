<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    protected $primaryKey = 'financialId';

    protected $fillable = [
        'userId',
        'familyIncome',
        'financialAid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function eligibilities()
    {
        return $this->hasMany(Eligibility::class, 'financialId', 'financialId');
    }
}