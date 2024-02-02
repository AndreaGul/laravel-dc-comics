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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->float('price',5,2)->nullable();
            $table->string('series')->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type', 50)->nullable();
            $table->string('artists')->nullable();
             $table->string('writers')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('img');
            $table->dropColumn('price');
            $table->dropColumn('series');
            $table->dropColumn('sale_date');
            $table->dropColumn('type');
            $table->dropColumn('artists');
            $table->dropColumn('writers');
        });
    }
};
