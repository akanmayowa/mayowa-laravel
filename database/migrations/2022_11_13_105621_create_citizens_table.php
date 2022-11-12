<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('lga_id');
            $table->string('phone');
            $table->unsignedBigInteger('ward_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citizens');
    }
};
