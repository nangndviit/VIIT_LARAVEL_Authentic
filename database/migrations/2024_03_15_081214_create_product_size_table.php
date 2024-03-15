<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizeTable extends Migration
{
    public function up()
    {
        Schema::create('product_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_SP');
            $table->unsignedBigInteger('size_id');
            $table->timestamps();

            $table->foreign('ID_SP')->references('ID_SP')->on('products')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizegiay')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_size');
    }
}
