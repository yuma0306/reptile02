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
            // カラムの変更
            $table->string('age')->nullable()->change();
            $table->string('price')->nullable()->change();
            $table->string('size')->nullable()->change();

            // 新しいカラムの追加
            $table->string('morph')->nullable()->after('species');
            $table->string('sex')->nullable()->after('species');
            $table->string('weight')->nullable()->after('size');
            $table->date('arrival_day')->nullable()->after('size');

            // 名前変更（正しい形に修正）
            $table->renameColumn('text', 'description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            // 名前変更を元に戻す
            $table->renameColumn('description', 'text');

            // 新しいカラムを削除
            $table->dropColumn('morph');
            $table->dropColumn('sex');
            $table->dropColumn('weight');
            $table->dropColumn('arrival_day');

            // カラムの変更を元に戻す
            $table->string('size')->nullable(false)->change();
            $table->string('price')->nullable(false)->change();
            $table->string('age')->nullable(false)->change();
        });
    }
};
