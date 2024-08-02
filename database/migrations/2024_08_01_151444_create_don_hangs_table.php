<?php

use App\Models\DonHang;
use App\Models\User;
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

            $table->string('ma_don_hang')->unique();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('ten_nguoi_nhan');
            $table->string('email_nguoi_nhan');
            $table->integer('so_dien_thoai_nguoi_nhan');
            $table->string('dia_chi_nguoi_nhan');
            $table->date('ngay_dat');
            $table->longText('ghi_chu')->nullable();
            $table->string('tran_thai_don_hang')->default(DonHang::CHO_XAC_NHAN);
            $table->string('tran_thai_thanh_toan')->default(DonHang::CHUA_THANH_TOAN);
            $table->double('tien_hang');
            $table->double('tien_ship');
            $table->double('tong_tien');
            

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
