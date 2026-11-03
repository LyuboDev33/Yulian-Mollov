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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->text('name', 255)->nullable();
            $table->text('email', 255)->nullable();
            $table->text('file_name', 255)->nullable();
            $table->text('description', 255)->nullable();
            $table->text('telephone', 255)->nullable();
            $table->text('treatment', 255)->nullable();
            $table->string('status', 255)->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
