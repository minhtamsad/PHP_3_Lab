<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('new', function (Blueprint $table) {
            $table->id();
            $table->string('tieuDe'); // Tiêu đề bài viết
            $table->text('tomTat'); // Tóm tắt bài viết
            $table->longText('noiDung'); // Nội dung chi tiết bài viết
            $table->integer('xem')->default(0); // Lượt xem
            $table->unsignedBigInteger('category_id')->nullable(); // Cột khóa ngoại
            $table->timestamps();

            // Thiết lập khóa ngoại
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('new');
    }
};
