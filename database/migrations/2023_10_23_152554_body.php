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
        Schema::create("body", function (Blueprint $table) {
            $table->id("body_id");
            $table->unsignedBigInteger("organizer_id");
            $table->string("body_name");
            $table->text("body_details");
            $table->string("body_price");
            $table->integer("body_capacity");

            $table->foreign("organizer_id")->references("organizer_id")->on("organizer")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("body");
    }
};
