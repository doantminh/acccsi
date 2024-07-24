<?php

use App\Models\ChucVu;
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
        Schema::table('users', function (Blueprint $table) {
            $table->string('anh_dai_dien');
            $table->integer('so_dien_thoai');
            $table->boolean('gioi_tinh');
            $table->string('dia_chi');
            $table->foreignIdFor(ChucVu::class)->constrained();
            $table->boolean('trang_thai')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('anh_dai_dien');
            $table->integer('so_dien_thoai');
            $table->boolean('gioi_tinh');
            $table->string('dia_chi');
            $table->foreignIdFor(ChucVu::class)->constrained();
            $table->boolean('trang_thai')->default(0);
        });
    }
};
