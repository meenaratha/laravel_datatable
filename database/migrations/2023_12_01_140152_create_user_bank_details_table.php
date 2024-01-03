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
            $table->string('bank_name');
            $table->string('account_holder');
            $table->string('account_number');
            $table->string('swift_code');
            $table->string('bank_branch');
            $table->string('bank_address');
            $table->string('ifsc_code');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
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
