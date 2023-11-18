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
            // カラムの型を変更
            $table->string('age')->nullable()->change();
            $table->string('price')->nullable()->change();
            $table->string('size')->nullable()->change();

            // 新しいカラムの追加前に存在チェック
            if (!Schema::hasColumn('pets', 'morph')) {
                $table->string('morph')->nullable()->after('species');
            }

            if (!Schema::hasColumn('pets', 'sex')) {
                $table->string('sex')->nullable()->after('species');
            }

            if (!Schema::hasColumn('pets', 'weight')) {
                $table->string('weight')->nullable()->after('size');
            }

            if (!Schema::hasColumn('pets', 'arrival_day')) {
                $table->date('arrival_day')->nullable()->after('size');
            }

            // 名前変更
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
            if (Schema::hasColumn('pets', 'morph')) {
                $table->dropColumn('morph');
            }

            if (Schema::hasColumn('pets', 'sex')) {
                $table->dropColumn('sex');
            }

            if (Schema::hasColumn('pets', 'weight')) {
                $table->dropColumn('weight');
            }

            if (Schema::hasColumn('pets', 'arrival_day')) {
                $table->dropColumn('arrival_day');
            }

            // カラムの変更を元に戻す
            $table->string('size')->nullable(false)->change();
            $table->string('price')->nullable(false)->change();
            $table->string('age')->nullable(false)->change();
        });
    }
};
