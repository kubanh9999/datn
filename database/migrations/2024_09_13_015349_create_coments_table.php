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
        Schema::create('coments', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('port_id');  // Mã danh mục (liên kết với bảng categories)
            $table->unsignedBigInteger('user_id');  // Mã danh mục (liên kết với bảng categories)
            $table->integer('star');
             $table->text('content');  // Mô tả sản phẩm (có thể null)
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coments');
    }
};
