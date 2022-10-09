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
        Schema::create('doctors', function (Blueprint $table) {


            $table->increments('doctId');
            $table->string('name');
            $table->string('father_name');
            $table->string('grand_name');
            $table->string('sure_name');
            $table->integer('nation_id');
            $table->date('birth_date');
            $table->integer('location');
            $table->double('tel');
            $table->double('tel2');
            $table->string('email')->unique();
            $table->boolean('status')->default('1');
            $table->boolean('gender')->default('0');
            $table->integer('salary_type')->default('0');
            $table->double('salary_amount')->default('0');
            $table->text('note');
            $table->integer('userId');

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
        Schema::dropIfExists('doctors');
    }
};
