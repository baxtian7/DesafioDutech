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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('rubro_id')->nullable();
            $table->unsignedBigInteger('comuna_id')->nullable();
            
            $table->foreign('rubro_id')->references('id')->on('rubros');
            $table->foreign('comuna_id')->references('id')->on('comunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rubro_id');
            $table->dropColumn('comuna_id');
            
            $table->dropForeign(['rubro_id']);
            $table->dropForeign(['comuna_id']);
        });
    }
};
