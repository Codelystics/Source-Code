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
        Schema::create("bootcamp", function (Blueprint $table) {
            $table->id("bootcamp_id");
            $table->date("bootcamp_start");
            $table->date("bootcamp_end");
            $table->string("bootcamp_type");
            $table->integer("bootcamp_slot");
            $table->text("poster_pic");
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
        Schema::dropIfExists("bootcamp");
    }
};