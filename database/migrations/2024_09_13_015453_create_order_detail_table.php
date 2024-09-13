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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');  // Mã danh mục (liên kết với bảng categories)
            $table->unsignedBigInteger('product_id');  // Mã danh mục (liên kết với bảng categories)
             $table->integer('quantity');  // Giá sản phẩm (8 chữ số, 2 chữ số thập phân)
             $table->decimal('price', 8, 2);  // Giá sản phẩm (8 chữ số, 2 chữ số thập phân)
             $table->decimal('total_price', 8, 2);  // Giá sản phẩm (8 chữ số, 2 chữ số thập phân)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
