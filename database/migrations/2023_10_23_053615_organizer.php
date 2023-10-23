<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("organizer", function (Blueprint $table) {
            $table->id("organizer_id");
            $table->string("organizer_name");
            $table->string("organizer_alias");
            $table->text("organizer_logo");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("organizer");
    }
};