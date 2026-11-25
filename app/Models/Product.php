<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'productId';

    protected $fillable = [
        'productName',
    ];

    public function transactionLogs()
    {
        return $this->hasMany(TransactionLog::class, 'productId', 'productId');
    }
}