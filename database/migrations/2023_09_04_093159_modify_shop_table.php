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
        Schema::table('shops', function (Blueprint $table) {
            // リネーム
            $table->renameColumn('name', 'shop_name');
            $table->renameColumn('google_map', 'map');

            // 削除
            $table->dropColumn('payment_method');
            $table->dropColumn('available_pets');
            $table->dropColumn('available_feeds');

            // 作成
            $table->text('description')->nullable();
            $table->string('animal_handler')->nullable();
            $table->string('shop_image1')->nullable();
            $table->string('shop_image2')->nullable();
            $table->string('shop_image3')->nullable();
            $table->string('shop_image4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            // リネームを元に戻す
            $table->renameColumn('shop_name', 'name');
            $table->renameColumn('map', 'google_map');

            // 削除したカラムを再作成する
            $table->string('payment_method');
            $table->string('available_pets');
            $table->string('available_feeds');

            // 作成したカラムを削除する
            $table->dropColumn('description');
            $table->dropColumn('animal_handler');
            $table->dropColumn('shop_image1');
            $table->dropColumn('shop_image2');
            $table->dropColumn('shop_image3');
            $table->dropColumn('shop_image4');
        });
    }
};
