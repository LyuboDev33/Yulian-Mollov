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
        Schema::create('active_causes', function (Blueprint $table) {
            $table->id();
            $table->text('email')->nullable();
            $table->text('campaign_status')->nullable();
            $table->text('cause_name')->nullable();
            $table->text('cause_youtube_video')->nullable();
            $table->text('cause_video_update')->nullable();
            $table->text('cause_main_image')->nullable();
            $table->text('cause_gallery')->nullable();

            $table->text('video_status', 255)->nullable();
            $table->text('gallery_status', 255)->nullable();

            $table->text('cause_description')->nullable();
            $table->text('cause_desired_amount')->nullable();
            $table->text('cause_amount_collected')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('active_causes');
    }
};
