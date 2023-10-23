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
        Schema::create("user", function (Blueprint $table) {
            $table->id("user_id");
            $table->string("user_name");
            $table->text("user_pfp");
            $table->string("user_email");
            $table->string("user_password");
            $table->boolean("is_admin")->default(false);
            $table->boolean("is_verified")->default(false);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("user");
    }
};