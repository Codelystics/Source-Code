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
        Schema::create("user_data", function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->string("user_nik");
            $table->text("user_ktp");
            $table->string("user_phone");
            $table->unsignedBigInteger("organizer_id");

            $table->primary("user_id");
            $table->foreign("user_id")->references("user_id")->on("user")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign("organizer_id")->references("organizer_id")->on("organizer")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("user_data");
    }
};