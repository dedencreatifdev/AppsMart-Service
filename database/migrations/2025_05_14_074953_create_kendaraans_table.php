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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('no_polisi', 100);
            $table->string('kdnsb', 100);
            $table->string('kdjns', 100);
            $table->string('kendaraan', 100);
            $table->string('kdtype', 100);
            $table->string('no_chasis', 100);
            $table->string('no_mesin', 100);
            $table->string('no_seri', 100);
            $table->string('tahun', 8);
            $table->string('warna', 50);
            $table->string('no_bpkb', 100);
            $table->string('no_faktur', 100);
            $table->string('tg_stnk', 100);
            $table->string('atasnama', 100);
            $table->string('alamat', 100);
            $table->string('km_akhir', 100);
            $table->string('km_hari', 100);
            $table->string('tg_jual', 100);
            $table->string('tg_daftar', 100);
            $table->string('keterangan', 100);
            $table->string('id_kode', 100);
            $table->string('id_comp', 100);
            $table->string('flag', 100);
            $table->string('ft_nmpemilik', 100);
            $table->string('ft_jnskend', 100);

            $table->timestamps();
        });
        Schema::create('kendaraan_team', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('team_id')->constrained('teams')->cascadeOnDelete();
            $table->foreignUuid('kendaraan_id')->constrained('kendaraans')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
