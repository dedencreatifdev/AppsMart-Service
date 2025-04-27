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
        Schema::create('level_permisions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('level_id')->constrained('levels')->cascadeOnDelete();
            $table->string('nama')->nullable();
            $table->boolean('lihat')->nullable()->default(false);
            $table->boolean('tambah')->nullable()->default(false);
            $table->boolean('edit')->nullable()->default(false);
            $table->boolean('hapus')->nullable()->default(false);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_permisions');
    }
};
