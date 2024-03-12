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
            $table->bigIncrements('ID_SP');
            $table->unsignedBigInteger('ID_Category');
            $table->unsignedBigInteger('ID_Brand');
            $table->string('Ten_SP');
            $table->decimal('Gia_SP', 10, 2);
            $table->string('Gia_SP2');
            $table->string('Mo_Ta');
            $table->string('Anh_SP1')->nullable();
            $table->string('Anh_SP2')->nullable();

            // Thêm ràng buộc khóa ngoại
            $table->foreign('ID_Category')->references('ID_Category')->on('categories'); // Chú ý đến tên cột là 'ID_Category' trong bảng 'categories'
            $table->foreign('ID_Brand')->references('ID_Brand')->on('brands'); // Đảm bảo rằng cũng có một bảng 'brands'
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
