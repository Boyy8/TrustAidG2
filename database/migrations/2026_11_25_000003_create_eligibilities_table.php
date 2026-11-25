<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eligibilities', function (Blueprint $table) {
            $table->id('eligibilityId');
            $table->foreignId('userId')->constrained('users', 'userId')->onDelete('cascade');
            $table->foreignId('financialId')->constrained('financials', 'financialId')->onDelete('cascade');
            $table->string('eligibilityStatus'); // Identified, Approved, Failed
            $table->unsignedBigInteger('verifiedBy');
            $table->date('verificationDate');
            $table->string('justification');
            $table->string('notificationStatus'); // Pending, Sent, Failed
            $table->date('notificationDate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eligibilities');
    }
};