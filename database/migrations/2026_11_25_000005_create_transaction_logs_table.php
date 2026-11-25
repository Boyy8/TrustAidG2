<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaction_logs', function (Blueprint $table) {
            $table->id('transactionId');
            $table->foreignId('tokenId')->constrained('tokens', 'tokenId')->onDelete('cascade');
            $table->foreignId('userId')->constrained('users', 'userId')->onDelete('cascade');
            $table->foreignId('productId')->constrained('products', 'productId')->onDelete('cascade');
            $table->decimal('amountRedeem', 10, 2);
            $table->timestamp('timeRedeem');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaction_logs');
    }
};