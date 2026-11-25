<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionLog extends Model
{
    protected $primaryKey = 'transactionId';

    protected $fillable = [
        'tokenId',
        'userId',
        'productId',
        'amountRedeem',
        'timeRedeem',
    ];

    public function token()
    {
        return $this->belongsTo(Token::class, 'tokenId', 'tokenId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'productId');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'transactionId', 'transactionId');
    }
}