<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('financials', function (Blueprint $table) {
            $table->id('financialId');
            $table->foreignId('userId')->constrained('users', 'userId')->onDelete('cascade');
            $table->decimal('familyIncome', 10, 2);
            $table->string('financialAid');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('financials');
    }
};