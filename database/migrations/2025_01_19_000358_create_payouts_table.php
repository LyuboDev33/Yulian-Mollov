<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\text;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payouts', function (Blueprint $table) {
            $table->id();
            $table->text('payout_user_id', 255)->nullable();
            $table->text('payout_amount', 255)->nullable();
            $table->text('payout_reason', 255)->nullable();
            $table->text('payout_account', 255)->nullable();
            $table->text('payout_file')->nullable();
            $table->text('payout_admin', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payouts');
    }
};
