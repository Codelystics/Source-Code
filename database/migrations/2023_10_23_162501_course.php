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
        Schema::create("course", function (Blueprint $table) {
            $table->id("course_id");
            $table->string("course_type");
            $table->float("course_rating");
            $table->unsignedBigInteger("body_id");

            $table->foreign("body_id")->references("body_id")->on("body")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("course");
    }
};
