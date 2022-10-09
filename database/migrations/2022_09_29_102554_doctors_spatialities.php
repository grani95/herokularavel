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
        Schema::create('doctors_spetialities', function (Blueprint $table) {
        $table->increments("doctSpId");
        $table->integer("spId");
        $table->integer("doctId");
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
        Schema::dropIfExists('doctors_spetialities');

    }
};
