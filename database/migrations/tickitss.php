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
        Schema::create('tickitss', function (Blueprint $table) {
            $table->id();
            $table->string("issus");
            $table->string("solution");
            $table->string("time");
            $table->string("feedback");
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
       
            $table->unsignedBigInteger('technical_id');
            $table->foreign('technical_id')->references('id')->on('technicals');
            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('requests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickitss');
    }
};
