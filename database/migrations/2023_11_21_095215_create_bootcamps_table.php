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
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('details');
            $table->string('price');
            $table->integer('capacity');
            $table->string('type');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->float('rating')->default(0);
            $table->string('banner')->default('defaultbanner.svg');
            $table->string('poster')->default('defaultposter.svg');
            $table->foreignId('organizer_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bootcamps');
    }
};