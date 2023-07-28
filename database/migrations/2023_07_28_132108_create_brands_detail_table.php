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
        Schema::create('brands_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_brands')->nullable();
            $table->foreign('id_brands')->references('id')->on('brands');
            $table->string('name');
            $table->string('phone');
            $table->string('instagram');
            $table->string('open_outlet_day');
            $table->string('close_outlet_day');
            $table->string('open_outlet_time');
            $table->string('close_outlet_time');
            $table->string('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands_detail');
    }
};
