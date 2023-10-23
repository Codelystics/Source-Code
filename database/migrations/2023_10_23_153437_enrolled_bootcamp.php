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
        Schema::create("enrolled_bootcamp", function (Blueprint $table) {
            $table->id("enrolled_bootcamp_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("bootcamp_id");

            $table->foreign("user_id")->references("user_id")->on("user")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign("bootcamp_id")->references("bootcamp_id")->on("bootcamp")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("enrolled_bootcamp");
    }
};