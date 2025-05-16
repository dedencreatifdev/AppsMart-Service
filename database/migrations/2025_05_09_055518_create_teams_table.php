<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('team_user', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('team_id')->constrained('teams')->cascadeOnDelete();
            $table->foreignUuid('user_id')->constrained('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
        Schema::dropIfExists('team_user');
    }
};
