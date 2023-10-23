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
        Schema::create("enrolled_course", function (Blueprint $table) {
            $table->id("enrolled_course_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("course_id");

            $table->foreign("user_id")->references("user_id")->on("user")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign("course_id")->references("course_id")->on("course")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("enrolled_course");
    }
};
