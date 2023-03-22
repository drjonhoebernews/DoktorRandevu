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
        Schema::table('hospitals', function (Blueprint $table) {
            // Şehir ve ilçe için yeni sütunlar ekleyin
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('district_id');

            // İlişkileri tanımlayın
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hospitals', function (Blueprint $table) {
            // İlişkileri kaldırın
            $table->dropForeign(['city_id']);
            $table->dropForeign(['district_id']);

            // Şehir ve ilçe için sütunları kaldırın
            $table->dropColumn('city_id');
            $table->dropColumn('district_id');
        });
    }
};
