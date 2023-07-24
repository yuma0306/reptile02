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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('business_hours')->nullable();
            $table->string('regular_holiday')->nullable();
            $table->string('phone')->nullable();
            $table->string('payment_method')->nullable();
            $table->text('access_method')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->text('google_map')->nullable();
            $table->text('sns')->nullable();
            $table->text('available_pets')->nullable();
            $table->text('available_feeds')->nullable();
            $table->string('website')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
