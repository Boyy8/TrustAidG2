<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $primaryKey = 'tokenId';

    protected $fillable = [
        'userId',
        'tokenValue',
        'tokenBalance',
        'tokenStatus',
        'allocatedItem',
        'creationDate',
        'expiryDate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function transactionLogs()
    {
        return $this->hasMany(TransactionLog::class, 'tokenId', 'tokenId');
    }
}