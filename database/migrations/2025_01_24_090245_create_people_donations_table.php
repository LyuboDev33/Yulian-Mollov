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
        Schema::create('people_donations', function (Blueprint $table) {
            $table->id();
            $table->text('person_name', 255)->nullable(); 
            $table->text('person_email', 255)->nullable();
            $table->text('person_amount', 255)->nullable();
            $table->text('campaign_id', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people_donations');
    }
};
