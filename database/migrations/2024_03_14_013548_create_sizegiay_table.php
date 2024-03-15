<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizegiayTable extends Migration
{
    public function up()
    {
        Schema::create('sizegiay', function (Blueprint $table) {
            $table->id();
            $table->string('size_name');
            $table->string('size_ton');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sizegiay');
    }
}
