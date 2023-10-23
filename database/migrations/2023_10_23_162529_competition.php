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
        Schema::create("competition", function (Blueprint $table) {
            $table->id("competition_id");
            $table->string("competition_type");
            $table->date("competition_start");
            $table->date("competition_end");
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
        Schema::dropIfExists("competition");
    }
};
