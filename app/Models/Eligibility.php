<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    protected $primaryKey = 'eligibilityId';

    protected $fillable = [
        'userId',
        'financialId',
        'eligibilityStatus',
        'verifiedBy',
        'verificationDate',
        'justification',
        'notificationStatus',
        'notificationDate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function financial()
    {
        return $this->belongsTo(Financial::class, 'financialId', 'financialId');
    }
}