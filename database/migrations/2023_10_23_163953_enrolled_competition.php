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
        Schema::create("enrolled_competition", function (Blueprint $table) {
            $table->id("enrolled_competition_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("competition_id");

            $table->foreign("user_id")->references("user_id")->on("user")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign("competition_id")->references("competition_id")->on("competition")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("enrolled_competition");
    }
};