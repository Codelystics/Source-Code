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
        Schema::create("event_management", function (Blueprint $table) {
            $table->id("event_management_id");
            $table->text("event_banner");
            $table->string("event_type");
            $table->date("event_start");
            $table->date("event_end");
            $table->string("event_venue");
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
        Schema::dropIfExists("event_management");
    }
};
