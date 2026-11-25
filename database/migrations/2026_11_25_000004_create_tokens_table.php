<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id('tokenId');
            $table->foreignId('userId')->constrained('users', 'userId')->onDelete('cascade');
            $table->decimal('tokenValue', 10, 2);
            $table->decimal('tokenBalance', 10, 2);
            $table->string('tokenStatus'); // Active, Used, Expired
            $table->string('allocatedItem');
            $table->dateTime('creationDate');
            $table->dateTime('expiryDate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};