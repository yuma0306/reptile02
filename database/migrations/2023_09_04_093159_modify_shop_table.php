<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            // リネーム
            $table->renameColumn('name', 'shop_name');
            $table->renameColumn('google_map', 'map');

            // 削除
            $table->dropColumn('payment_method');
            $table->dropColumn('available_pets');
            $table->dropColumn('available_feeds');

            // 作成
            if (!Schema::hasColumn('shops', 'description')) {
                $table->text('description')->nullable();
            }
            if (!Schema::hasColumn('shops', 'animal_handler')) {
                $table->string('animal_handler')->nullable();
            }
            if (!Schema::hasColumn('shops', 'shop_image1')) {
                $table->string('shop_image1')->nullable();
            }
            if (!Schema::hasColumn('shops', 'shop_image2')) {
                $table->string('shop_image2')->nullable();
            }
            if (!Schema::hasColumn('shops', 'shop_image3')) {
                $table->string('shop_image3')->nullable();
            }
            if (!Schema::hasColumn('shops', 'shop_image4')) {
                $table->string('shop_image4')->nullable();
            }
        });
    }
};
