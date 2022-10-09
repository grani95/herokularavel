<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spetialities', function (Blueprint $table) {
            $table->increments("spId");
            $table->string("spName");
            $table->integer("depId");
            $table->boolean("status")->default('1');
            $table->integer("userId");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spetialities');
    }
};
