<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'reportId';

    protected $fillable = [
        'transactionId',
        'userId',
        'reportInfo',
    ];

    public function transactionLog()
    {
        return $this->belongsTo(TransactionLog::class, 'transactionId', 'transactionId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}