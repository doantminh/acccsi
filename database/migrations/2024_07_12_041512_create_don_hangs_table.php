<?php

use App\Models\PhuongThucThanhToan;
use App\Models\TaiKhoan;
use App\Models\TrangThaiDonHang;
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
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_don_hang');
            $table->foreignIdFor(TaiKhoan::class)->constrained();
            $table->string('ten_nguoi_nhan');
            $table->string('email_nguoi_nhan');
            $table->integer('so_dien_thoai_nguoi_nhan');
            $table->string('dia_chi_nguoi_nhan');
            $table->date('ngay_dat');
            $table->double('tong_tien');
            $table->longText('ghi_chu');
            $table->foreignIdFor(PhuongThucThanhToan::class)->constrained();
            $table->foreignIdFor(TrangThaiDonHang::class)->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};
