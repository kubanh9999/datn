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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status');  // Tên sản phẩm
            $table->unsignedBigInteger('user_id');  // Mã danh mục (liên kết với bảng categories)
             $table->decimal('total_amount', 8, 2);  // tộngr cộng
          
             $table->timestamp('order_date');  // Hình ảnh sản phẩm (có thể null)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
