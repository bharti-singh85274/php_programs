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
        Schema::table('cruds', function (Blueprint $table) {
            $table->string('mobile')->change(); // modify col type,eg changing to string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cruds', function (Blueprint $table) {
            $table->integer('mobile')->change(); // reverse the modification, eg changing back to integer
        }); 
    }
};
