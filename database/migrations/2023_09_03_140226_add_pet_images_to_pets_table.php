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
        Schema::table('pets', function (Blueprint $table) {
            $table->string('pet_image1')->nullable();
            $table->string('pet_image2')->nullable();
            $table->string('pet_image3')->nullable();
            $table->string('pet_image4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropColumn('pet_image1');
            $table->dropColumn('pet_image2');
            $table->dropColumn('pet_image3');
            $table->dropColumn('pet_image4');
        });
    }
};
