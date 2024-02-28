<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('ID_Category');
            $table->string('Name_Catogory');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
