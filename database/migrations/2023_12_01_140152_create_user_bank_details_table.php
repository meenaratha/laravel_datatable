<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('user_bank_details')) {
        Schema::create('user_bank_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('bank_name')->nullable();
            $table->string('account_holder')->nullable();
            $table->string('account_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('terms');
            $table->timestamps();

        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_bank_details');

    }
};
