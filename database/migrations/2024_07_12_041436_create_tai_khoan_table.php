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
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('anh_dai_dien');
            $table->string('ho_ten');
            $table->string('email');
            $table->integer('so_dien_thoai');
            $table->boolean('gioi_tinh');
            $table->string('dia_chi');
            $table->string('mat_khau');
            $table->foreignIdFor(ChucVu::class)->constrained();
            $table->boolean('trang_thai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoan');
    }
};
