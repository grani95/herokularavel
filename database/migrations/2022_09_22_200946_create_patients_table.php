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
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('file_id');
            $table->integer('identity_n');
            $table->string('name');
            $table->string('father_name');
            $table->string('grand_name');
            $table->string('sure_name');
            $table->integer('nation_id');
            $table->date('birth_date');
            $table->integer('loctId');
            $table->double('tel');
            $table->double('tel2');
            $table->integer('exam_type');
            $table->string('email')->unique();
            $table->boolean('status')->default('1');
            $table->boolean('gender')->default('0');
            $table->boolean('social_status')->default('0');
            $table->integer('blood_cat');
            $table->text('history');
            $table->double('paid')->default('0');
            $table->integer('user_id');
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
        Schema::dropIfExists('patients');
    }
};
