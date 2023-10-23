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
        Schema::create("enrolled_event", function (Blueprint $table) {
            $table->id("enrolled_event_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("event_management_id");

            $table->foreign("user_id")->references("user_id")->on("user")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign("event_management_id")->references("event_management_id")->on("event_management")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("enrolled_event");
    }
};