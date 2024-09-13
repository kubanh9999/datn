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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Tên sản phẩm
            $table->unsignedBigInteger('category_id');  // Mã danh mục (liên kết với bảng categories)
             $table->decimal('price', 8, 2);
             $table->decimal('dicount', 8, 2);  // Giá sản phẩm (8 chữ số, 2 chữ số thập phân)
             $table->integer('stock');  // Số lượng tồn kho
             $table->text('description')->nullable();  // Mô tả sản phẩm (có thể null)
             $table->string('image')->nullable();  // Hình ảnh sản phẩm (có thể null)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
