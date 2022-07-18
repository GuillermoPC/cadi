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
        Schema::create('kids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('father_last_name');
            $table->string('mother_last_name');
            $table->date('birthdate');
            $table->enum('genre',['F','M']);
            $table->integer('age');
            $table->longText('img')->nullable();
            //Columnas de control
            $table->boolean('status')->default(true);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('canceled_by')->nullable();
            $table->dateTime('canceled_at')->nullable();
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
        Schema::dropIfExists('kids');
    }
};
